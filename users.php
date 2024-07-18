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
        <title>Zenith</title>
    </head>

<body>
<nav>
    <ul class="nav">
    <li class="navbar-brand"><i class="bi bi-arrow-left-circle-fill"></i><a href="dashboard.php">Back to Dashboard</a></li>
    <li class="nav-item ms-auto">
        <i class="bi bi-plus-circle-fill"><a href="adminconfirm.php">Add New Admin</a></i>
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
<center><h2>User List</h2></center>
<div class="table-container">
    <table class="table table-dark table-hover">
        <thead class="thead-dark">
            <tr>
                <th>User ID</th>
                <th>Email</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>Admin Privileges</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Connect to the database
            include 'include/db.php';

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch user data from the database
            $sql = "SELECT userID, email, username, fullname, userAdd, birthdate, isAdmin FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $isAdmin = $row["isAdmin"];
                    $color = ($isAdmin === 'true') ? 'green' : 'red';

                    echo "<tr>";
                    echo "<td>" . $row["userID"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["fullname"] . "</td>";
                    echo "<td>" . $row["userAdd"] . "</td>";
                    echo "<td>" . $row["birthdate"] . "</td>";
                    echo "<td style='color: " . $color . "'>" . $isAdmin . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "No Users found.";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</div>

</body>
</html>