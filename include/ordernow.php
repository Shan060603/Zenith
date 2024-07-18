<?php

// Check if the 'order' button was clicked
if (isset($_POST['order'])) {
    // Assuming you've already included your database connection file at the top
    include("include/db.php");

    // Sample values for insertion (replace these with actual values)
    // Replace 'loggedInUserID' with the name of your session variable containing the userID
    if (isset($_SESSION['userID'])) {
        $loggedInUserID = $_SESSION['userID']; // Use the stored userID from the session
        $productID = isset($_GET['productID']) ? $_GET['productID'] : null; // Replace with the obtained productID from the webpage or set it to null if not available
        $numberOfProductsOrdered = isset($_POST['numberOfProductsOrdered']) ? $_POST['numberOfProductsOrdered'] : null; // Replace with the obtained number of products ordered from the form or set it to null if not available
        $dateOfOrder = date("Y-m-d H:i:s"); // Current date and time as date of order

        // Fetch fullname associated with the provided userID
        $stmtUser = $conn->prepare("SELECT fullname FROM users WHERE userID = ?");
        $stmtUser->bind_param("i", $loggedInUserID);
        $stmtUser->execute();
        $resultUser = $stmtUser->get_result();

        // Check if the userID exists in the Users table
        if ($resultUser->num_rows > 0) {
            $rowUser = $resultUser->fetch_assoc();
            $fullname = $rowUser["fullname"];

            // Prepare and execute the SQL statement to insert data into the orders table
            $stmt = $conn->prepare("INSERT INTO orders (userID, fullname, productID, numberOfProductsOrdered, dateOfOrder) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("issis", $loggedInUserID, $fullname, $productID, $numberOfProductsOrdered, $dateOfOrder);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "<div class='message'>
                <center>
                <h1>Order Placed!</h1>
                </center>
      </div><br>";
      echo "<a style='color: white !important;' href='javascript:window. history. back();'><button class='btn btn-success btn-lg'>Back to Product Page</button></a>";
      exit;
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "User not found.";
        }

        // Close statements
        $stmtUser->close();
        $stmt->close();
    } else {
        echo "User not logged in.";
    } // Handle the case where the user is not logged in

    // Close the database connection
    $conn->close();
}
?>

<!-- Your HTML form -->
<form method="POST" action="#">
    <input class="form-control" type="number" min="0" max="100" name='numberOfProductsOrdered'>
    <br>
    <button type="submit" name="order" value="order" class="btn btn-dark">Order</button>
</form>
