<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign_up_styles.css">
    <title>Zenith</title>
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
                    <img src="images/ZenithLogoFinal-White.png" width="170px" alt="logo">
                </li>
            </ul>
            <h1>User Login</h1>
            <hr>

            <!-- Include your PHP logic for displaying error messages -->
            <?php include("login_process.php");?>

            <label for="email"><b>Email Address</b></label>
            <br>
            <input class="form-control" type="email" placeholder="Enter Email Address" name="email" required>
            <br>
            <label for="password"><b>Password</b></label>
            <input class="form-control password" type="password" placeholder="Enter Password" name="password" required>
            
            <!-- Include logic for displaying the sign-up link, terms & privacy, and forgot password -->
            <p>Don't have an account yet? <a href="registration.php">Sign Up</a></p>
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            <div class="clearfix">
                <button type="submit" name="login" id="submit" value="Login" class="signupbtn rounded-3">Login</button>
                <h1> </h1>
                <center><a href="forgotpassword.php">Forgot Password?</a></center>
            </div>
        </div>
    </form>
    
</body>

</html>