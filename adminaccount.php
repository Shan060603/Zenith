<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="sign_up_styles.css">
        <link rel="icon" href="images/Letter-Logo-White.png" type="image/icon type">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Zenith | Admin</title>
    </head>

<body>
<nav>
    <ul class="nav">
    <li class="navbar-brand"><i class="bi bi-arrow-left-circle-fill"></i><a href="javascript:window. history. back();">Back</a></li>
    <li class="nav-item ms-auto">
            <a style="color: red !important;" href="adminlogout.php">Logout</a>
        </li>
    </ul>
</nav>
<div class="justify-content-center">
<nav>
    <ul class="nav">
    <li class="nav-item mx-auto">
                       <img src="images/ZenithLogoFinal-White.png" width="170px" alt="logo">
                    </li>
    </ul>
</nav>
</div>
                        <?php
                            // Check if the user is logged in and the userID is available in the session
                        if (isset($_SESSION['userID'])) {
                        // Get the userID from the session
                        $loggedInUserID = $_SESSION['userID'];
                            

                            include'include/db.php';

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                                // Query to fetch productPrice based on productID
                                $sql = "SELECT username, fullname, email, userAdd, birthdate FROM users WHERE userID = '$loggedInUserID'";

                                $result = $conn->query($sql);

                                if ($result && $result->num_rows > 0) {
                                // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $username = $row["username"];
                                        $fullname = $row["fullname"];
                                        $email = $row["email"];
                                        $userAdd = $row["userAdd"];
                                        $birthdate = $row["birthdate"];

                                    }
                                } else {
                                    $username = "N/A";
                                    $fullname = "N/A";
                                    $email = "N/A";
                                    $userAdd = "N/A";
                                    $birthdate = "N/A";
                                    }

                            $conn->close();
                                } else {
                                    echo "User not logged in.";
                                }
                        ?>
<div class="account-container">
    <div class="user-details">
        <h1>Account Information</h1>
        <hr>
        <h6>Username: <?php echo "$username"?></h6>
        <h6>Account Holder: <?php echo "$fullname" ?></h6>
        <h6>Email: <?php echo"$email"?></h6>
        <h6>Address: <?php echo "$userAdd" ?></h6>
        <h6>Date of Birth: <?php echo "$birthdate" ?></h6>
    </div>
</div>


</body>
</html>