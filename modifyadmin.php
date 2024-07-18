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
    <h1>Enable Admin Privileges</h1>
    <hr>

    <?php include("include/addnewadmin.php");?>

    <label for="email"><b>Email Address</b></label>
    <br>
    <input class="form-control" type="email" placeholder="Enter Email Address" name="email" required>
    <br>
    <div class="clearfix">
      <button type="submit" name="enable" id="submit" value="enable" class="signupbtn btn btn-success rounded-3">Enable Admin Privileges</button>
      <h1> </h1>
      <button type="submit" name="disable" id="submit" value="disabke" class="signupbtn btn btn-danger rounded-3">Disable Admin Privileges</button>   
    </div>
  </div>
</form>
</body>

</html>