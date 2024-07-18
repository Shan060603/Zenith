<?php

          session_start();

          include "include/db.php";

          if (isset($_POST['register'])) {

            $email = $_POST['email'];
            $name = $_POST['username'];
            $fullname = $_POST['fullname'];
            $useraddress = $_POST['userAdd'];
            $birthdate = $_POST['birthdate'];
            $pass = $_POST['password'];
            $cpass = $_POST['cpass'];


            $check = "select * from users where email='{$email}'";

            $res = mysqli_query($conn, $check);

            $passwd = password_hash($pass, PASSWORD_DEFAULT);

            $key = bin2hex(random_bytes(12));




            if (mysqli_num_rows($res) > 0) {
              echo "<div class='message'>
                  <center>
                  <h1>Please Try Again</h1>
        <p>This email is used</p>
        </center>
        </div><br>";

                  echo "<a href='signup.php'><button class='btn btn-secondary btn-lg'>Go Back</button></a>";
                  exit;


            } else {

              if ($pass === $cpass & preg_match('/^(?=.*[A-Z])(?=.*[!@#$%^&*()_+])[a-zA-Z0-9!@#$%^&*()_+]{8,}$/', $_POST['password'])) {

                $sql = "insert into users(username,email,password,fullname,userAdd,birthdate) values('$name','$email','$passwd','$fullname','$useraddress','$birthdate')";

                $result = mysqli_query($conn, $sql);

                if ($result) {

                  echo "<div class='message'>
      <p>You are registered successfully!</p>
      </div><br>";

                  echo "<a style='color: white !important;' href='userlogin.php'><button class='btn btn-success btn-lg'>Login Now</button></a>";
                  exit;

                } 
                
                else {
                  echo "<div class='message'>
                  <center>
                  <h1>Please Try Again</h1>
        <p>This email is used</p>
        </center>
        </div><br>";

                  echo "<a href='signup.php'><button class='btn btn-secondary btn-lg'>Go Back</button></a>";
                  exit;
                }

              }
              
              if(!preg_match('/^(?=.*[A-Z])(?=.*[!@#$%^&*()_+])[a-zA-Z0-9!@#$%^&*()_+]{8,}$/', $_POST['password']))
    {
        echo "<div class='message'>

        <center>
        <h1>Please Try Again</h1>
        <br>
        <p>Password must contain a special character and a number.</p>
        </center>
        </div><br>";

        echo "<a href='signup.php'><button class='btn btn-secondary btn-lg'>Go Back</button></a>";
        exit;
    }
              
              else {
                echo "<div class='message'>
                <center>
                <h1> Please Try Again </h1>
      <p>Passwords do not match.</p>
      </center>
      </div><br>";

                echo "<a href='signup.php'><button class='btn btn-secondary btn-lg'>Go Back</button></a>";
                exit;
              }
            }
          } else {}

?>