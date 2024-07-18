<?php
session_start();
include "include/db.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM users WHERE email = ?";
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
            header('Location: index.php');
            exit();
        } else {
            $_SESSION['login_error'] = "Invalid email or password";
            header('Location: userlogin.php'); // Redirect to the login page with an error message
            exit();
        }
    } else {
        $_SESSION['login_error'] = "Invalid email or password";
        header('Location: userlogin.php'); // Redirect to the login page with an error message
        exit();
    }
}
?>
