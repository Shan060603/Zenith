<?php
session_start();
include "include/db.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM users WHERE email = ? AND isAdmin = 'true' ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        if (password_verify($password, $storedPassword)) {
            // Passwords match - user authenticated
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['logged_in'] = true;
            header('Location: dashboard.php');
            exit();
        } else {
            $_SESSION['login_error'] = "Invalid email or password";
            header('Location: admin.php'); // Redirect to the login page with an error message
            exit();
        }
    } else {
        $_SESSION['login_error'] = "Invalid email or password";
        header('Location: admin.php'); // Redirect to the login page with an error message
        exit();
    }
}
?>

<?php
      // include "include/db.php";

      // if (isset($_POST['login'])) {

      //   $email = $_POST['email'];
      //   $pass = $_POST['password'];

      //   $sql = "SELECT * FROM users
      //   WHERE email = '$email' AND isAdmin = 'true';";

      //   $res = mysqli_query($conn, $sql);

      //   if (mysqli_num_rows($res) > 0) {

      //     $row = mysqli_fetch_assoc($res);

      //     $password = $row['password'];

      //     $decrypt = password_verify($pass, $password);


      //     if ($decrypt) {
      //       $_SESSION['userID'] = $row['userID'];
      //       $_SESSION['username'] = $row['username'];
      //       header("location: dashboard.php");


      //     } 
          
      //     else {
      //       echo "<div class='message'>
      //               <p>Wrong Password</p>
      //               </div><br>";

      //       echo "<a href='admin.php'><button class='btn'>Go Back</button></a>";
      //     }

      //   } 
        
      //   else {
      //     echo "<div class='message'>
      //               <p>Wrong Email or Password</p>
      //               </div><br>";

      //     echo "<a href='admin.php'><button class='btn'>Go Back</button></a>";

      //   }


      // } else {}


        ?>