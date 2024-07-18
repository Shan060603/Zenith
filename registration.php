<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="sign_up_styles.css">
        <link rel="icon" href="images/Letter-Logo-White.png" type="image/icon type">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Zenith</title>
    </head>

<body>

<form method="POST" action="#" style="border:1px solid #ccc">
  <div class="container">
  <ul class="nav">
                    <li class="navbar-brand">
                        <a style="text-decoration: none;" href="index.php"><img src="images/ZenithLogoFinal-White.png" width="170px" alt="logo"></a>
                    </li>
                </ul>
    <h1>User Sign Up</h1>

    <p>Please fill in this form to create an account.</p>
    <hr>

    <?php include("include/signup.php");?>

    <label for="fullname"><b>Full Name</b></label>
    <input class="form-control" type="text" placeholder="Enter Full Name" name="fullname" required>
    <br>
    <label for="email"><b>Email Address</b></label>
    <br>
    <input class="form-control" type="email" placeholder="Enter Email Address" name="email" required>
    <br>
    <label for="useraddress"><b>Address</b></label>
    <input class="form-control" type="text" placeholder="Enter Address" name="userAdd" required>
    <br>
    <label for="birthdate"><b>Birth Date</b></label>
    <input class="form-control" type="date" placeholder="Enter Birth Date" name="birthdate" required>
    <br>
    <label for="username"><b>Username</b></label>
    <input class="form-control" type="text" placeholder="Enter Username" name="username" required>
    <br>
    <label for="password"><b>Password</b></label>
    <input class="form-control" type="password" placeholder="Enter Password" name="password" required>
    <br>
    <label for="confirmpassword"><b>Confirm Password</b></label>
    <input class="form-control" type="password" placeholder="Confirm Password" name="cpass" required>

    <p>Already have an account? <a href="userlogin.php">Login</a></p>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="reset" value="reset" class="cancelbtn rounded-3">Cancel</button>
      <h1> </h1>
      <button type="submit" name="register" id="submit" value="Signup" class="signupbtn rounded-3">Sign Up</button>
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
