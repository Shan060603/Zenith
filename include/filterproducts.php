<?php
include 'db.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize an array to hold conditions
$conditions = [];

if (isset($_POST['spacecraftrange']) && !empty($_POST['spacecraftrange'])) {
    $selectedRange = $_POST['spacecraftrange'];
    $conditions[] = "spacecraftrange >= $selectedRange";
}

if (isset($_POST['speed']) && !empty($_POST['speed'])) {
    $selectedSpeed = $_POST['speed'];
    $conditions[] = "speed >= $selectedSpeed";
}

if (isset($_POST['capacity']) && !empty($_POST['capacity'])) {
    $selectedCapacity = $_POST['capacity'];
    $conditions[] = "capacity >= $selectedCapacity";
}

if (isset($_POST['price']) && !empty($_POST['price'])) {
    $selectedPrice = $_POST['price'];
    $conditions[] = "productPrice <= $selectedPrice";
}

// Construct the WHERE clause based on filled inputs
$whereClause = "";
if (!empty($conditions)) {
    $whereClause = "WHERE " . implode(" AND ", $conditions);
}

$sql = "SELECT productID, productName, productPrice, productManufacturer, spacecraftrange, speed, capacity, productURL FROM products $whereClause";

$result = $conn->query($sql);

// Display products with clickable rows
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productID = $row["productID"];
        $productName = "Z$productID.php"; // Product page URL based on the product ID
        
        echo "<tr onclick='redirectToProductPage(\"$productName\")'>";
        echo "<td>" . $row["productID"] . "</td>";
        echo "<td>" . $row["productName"] . "</td>";
        // Display other product attributes...
        echo "<td>" . $row["productPrice"] . "</td>";
        echo "<td>" . $row["productManufacturer"] . "</td>";
        echo "<td>" . $row["spacecraftrange"] . "</td>";
        echo "<td>" . $row["speed"] . "</td>";
        echo "<td>" . $row["capacity"] . "</td>";
        echo "<td>" . "<img class='table-image' src='" . $row["productURL"] . "'>" . "</td>";
        echo "</tr>";
    }
} else {
    echo "No products found.";
}

$conn->close();
?>
