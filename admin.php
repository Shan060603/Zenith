<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign_up_styles.css">
    <title>Zenith | Admin</title>
    <link rel="icon" href="images/Letter-Logo-White.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.reflowhq.com/v2/toolkit.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">

</head>

<body>
<form method="POST" action="#" style="border:1px solid #ccc">
  <div class="container">
  <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a style="text-decoration: none;" href="index.php"><img src="images/ZenithLogoFinal-White.png" width="170px" alt="logo"></a>
                    </li>
                </ul>
    <h1>Admin Login</h1>
    <hr>

    <?php include("include/adminlogin.php");?>

    <label for="email"><b>Email Address</b></label>
    <br>
    <input class="form-control" type="email" placeholder="Enter Email Address" name="email" required>
    <br>
    <label for="password"><b>Password</b></label>
    <input class="form-control" type="password" placeholder="Enter Password" name="password" required>

    <p><a href="userlogin.php">Login as User</a></p>
    
    <p>Don't have an account yet? <a href="registration.php">Sign Up</a></p>

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