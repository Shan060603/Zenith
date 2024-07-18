<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign_up_styles.css">
    <title>Zenith</title>
    <link rel="icon" href="images/Letter-Logo-White.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.reflowhq.com/v2/toolkit.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">

</head>

<body>
<form method="POST" action="#" style="border:1px solid #ccc">
  <div class="container">
  <nav>
    <ul class="nav">
    <li class="navbar-brand"><i class="bi bi-arrow-left-circle-fill"></i><a href="users.php">Back to Users List</a></li>
    </ul>
</nav>
  <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <img src="images/ZenithLogoFinal-White.png" width="170px" alt="logo">
                    </li>
                </ul>
    <h1>Re-Login to Confirm Admin Identity</h1>
    <hr>

    <?php 
      include "include/db.php";

      if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM users
        WHERE email = '$email' AND isAdmin = 'true';";

        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {

          $row = mysqli_fetch_assoc($res);

          $password = $row['password'];

          $decrypt = password_verify($pass, $password);


          if ($decrypt) {
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['username'] = $row['username'];
            header("location: modifyadmin.php");


          } 
          
          else {
            echo "<div class='message'>
                    <p>Wrong Password</p>
                    </div><br>";

            echo "<a href='adminconfirm.php'><button class='btn'>Go Back</button></a>";
          }

        } 
        
        else {
          echo "<div class='message'>
                    <p>Wrong Email or Password</p>
                    </div><br>";

          echo "<a href='adminconfirm.php'><button class='btn'>Go Back</button></a>";

        }


      } else {}


        ?>

    <label for="email"><b>Email Address</b></label>
    <br>
    <input class="form-control" type="email" placeholder="Enter Email Address" name="email" required>
    <br>
    <label for="password"><b>Password</b></label>
    <input class="form-control" type="password" placeholder="Enter Password" name="password" required>

    <div class="clearfix">
      <button type="submit" name="login" id="submit" value="Login" class="signupbtn rounded-3">Login</button>
      <h1> </h1>
      <center><a href="forgotpassword.php">Forgot Password?</a></center>      
    </div>
  </div>
</form>

<script>
    const toggle = document.querySelector(".toggle"),
      input = document.querySelector(".password");
    toggle.addEventListener("click", () => {
      if (input.type === "password") {
        input.type = "text";
        toggle.classList.replace("fa-eye-slash", "fa-eye");
      } else {
        input.type = "password";
      }
    })
  </script>
</body>

</html>