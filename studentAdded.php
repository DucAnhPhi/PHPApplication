<html>
  <head>
      <title>Add Student</title>
  </head>
  <body>
  <?php

  if(isset($_POST[submit])){

    $data_mssing = array();

    if(empty($_POST['first_name'])){

      // Adds name to array
      $data_missing[] = 'First Name';
    } else {

      //Trimmed white space from the name and store the name
        $f_name = trim($POST['first_name']);

      }

      if(empty($_POST['last_name'])){

        // Adds name to array
        $data_missing[] = 'Last name';
      } else {

        //Trimmed white space from the name and store the name
          $f_name = trim($POST['last_name']);

        }

        if(empty($_POST['email'])){

          // Adds name to array
          $data_missing[] = 'Email';
        } else {

          //Trimmed white space from the name and store the name
            $f_name = trim($POST['email']);

          }

          if(empty($_POST['street'])){

            // Adds name to array
            $data_missing[] = 'Street';
          } else {

            //Trimmed white space from the name and store the name
              $f_name = trim($POST['street']);

            }

            if(empty($_POST['city'])){

              // Adds name to array
              $data_missing[] = 'City';
            } else {

              //Trimmed white space from the name and store the name
                $f_name = trim($POST['city']);

              }

              if(empty($_POST['state'])){

                // Adds name to array
                $data_missing[] = 'State';
              } else {

                //Trimmed white space from the name and store the name
                  $f_name = trim($POST['state']);

                }

                if(empty($_POST['zip'])){

                  // Adds name to array
                  $data_missing[] = 'Zip Code';
                } else {

                  //Trimmed white space from the name and store the name
                    $f_name = trim($POST['zip']);

                  }

                  if(empty($_POST['phone'])){

                    // Adds name to array
                    $data_missing[] = 'Phone Number';
                  } else {

                    //Trimmed white space from the name and store the name
                      $f_name = trim($POST['phone']);

                    }

                    if(empty($_POST['birth_date'])){

                      // Adds name to array
                      $data_missing[] = 'Birth Date';
                    } else {

                      //Trimmed white space from the name and store the name
                        $f_name = trim($POST['birth_date']);

                      }

                      if(empty($_POST['sex'])){

                        // Adds name to array
                        $data_missing[] = 'Sex';
                      } else {

                        //Trimmed white space from the name and store the name
                          $f_name = trim($POST['sex']);

                        }

                        if(empty($_POST['lunch'])){

                          // Adds name to array
                          $data_missing[] = 'Lunch Costs';
                        } else {

                          //Trimmed white space from the name and store the name
                            $f_name = trim($POST['lunch']);

                          }

                if(empty($data_missing)){

                  require_once('../mysqli_connect.php');

                  $query = "INSERT INTO students (first_name, last_name, email, street,
                  city, state, zip, phone, birth_date, sex, date_entered, lunch_cost,
                  student_id) VALUES (?, ? ,?, ? ,? ,?, ?, ?, ?, ?, NOW(), ?, NULL)";

                  $stmt = mysqli_prepare($dbc, $query);

                  i Integers
                  d Doubles
                  b Blobs
                  s Everything Else

                  mysqli_stmt_bind_param($stmt, "ssssssisssd", $f_name,
                                         $l_name, $email, $street, $city,
                                         $state, $zip, $phone, $b_date,
                                         $sex, $lunch);

                  mysqli_stmt_execute($stmt);

                  $affected_rows = mysqli_stmt_affected_rows($stmt);
                  if($affected_rows == 1){

                    echo 'Student Entered';

                    mysqli_stmt_close($stmt);

                    mysqli_close($dbc);

                  } else {

                        echo 'Error Occurred <br />'
                        echo mysqli_error();

                        mysqli_stmt_close($stmt);

                        mysqli_close($dbc);

                  }

                } else {

                  echo 'You need to enter the following data<br />';

                  foreach($data_missing as $missing){

                    echo '$missing<br />'

                  }

                }


  }

     ?>
</body>
</html>
