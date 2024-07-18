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
<center><h2>Order List</h2></center>
<div class="table-container">
        <table class="table table-dark table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Order ID</th>
                    <th>User ID</th>
                    <th>Name of User</th>
                    <th>Spacecraft ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Amount Ordered</th>
                    <th>Date of Order</th>
                    <th>Total</th>
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
                $sql = "SELECT orderID, userID, fullname, productID, productName, productPrice, numberOfProductsOrdered, dateOfOrder, orderTotal, productURL FROM orders";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["orderID"] . "</td>";
                        echo "<td>" . $row["userID"] . "</td>";
                        echo "<td>" . $row["fullname"] . "</td>";
                        echo "<td>" . $row["productID"] . "</td>";
                        echo "<td>" . $row["productName"] . "</td>";
                        echo "<td>". "<img class='table-image' src ='" . $row["productURL"] . "'>" ."</td>";
                        echo "<td>" . $row["productPrice"] . "</td>";
                        echo "<td>" . $row["numberOfProductsOrdered"] . "</td>";
                        echo "<td>". $row["dateOfOrder"] . "</td>";
                        echo "<td>". $row["orderTotal"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No Orders found.";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>