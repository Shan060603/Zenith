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
        <i class="bi bi-plus-circle-fill"><a href="newproduct.php">Add Spacecraft</a></i>
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
<center><h2>Spacecraft List</h2></center>
<div class="table-container">
        <table class="table table-dark table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Spacecraft ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Manufacturer</th>
                    <th>Range (in lightyears)</th>
                    <th>Cruising Speed (kph in vacuum)</th>
                    <th>Passenger Capacity</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the database
                include 'include/db.php';

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch product data from the database
                $sql = "SELECT productID, productName, productPrice, productManufacturer, spacecraftrange, speed, capacity, productURL FROM products";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["productID"] . "</td>";
                        echo "<td>" . $row["productName"] . "</td>";
                        echo "<td>" . $row["productPrice"] . "</td>";
                        echo "<td>" . $row["productManufacturer"] . "</td>";
                        echo "<td>" . $row["spacecraftrange"] . "</td>";
                        echo "<td>" . $row["speed"] . "</td>";
                        echo "<td>" . $row["capacity"] . "</td>";
                        echo "<td>". "<img class='table-image' src ='" . $row["productURL"] . "'>" ."</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No products found.";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>