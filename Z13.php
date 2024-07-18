<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith</title>
    <link rel="stylesheet" href="product-page-styles.css">
    <link rel="icon" href="images/Letter-Logo-White.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script defer src="app.js"></script>
</head>
<body>

        <div class="nav-container sticky-top">
            <?php include("include/navbarmain.php");?>
        </div>
    
        <section>
            <div class="hero-section">
                <div class="product-description">
                    <h1 class="product-title">Zenith: Twilight</h1>
                    <hr>
                    <p>Introducing the Zenith: Twilight, an epitome of precision engineering for the lone cosmic navigator. This spacecraft, akin to the Eclipse, accommodates only one pilot but unveils an additional layer of security with concealed weaponry in its underbelly. Seamlessly merging sleek design with advanced technology, the Twilight empowers its pilot with unparalleled command over the skies and space. Its nimble maneuverability, even at high speeds, coupled with hidden defenses, redefines cosmic travel, offering absolute control and security amidst the celestial expanse for those navigating the cosmos solo.</p>
                       <?php
                            // Set the productID for this page
                            $productID = 13;

                            include'include/db.php';

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                                // Query to fetch productPrice based on productID
                                $sql = "SELECT productName, productPrice, spacecraftrange, speed, capacity FROM products WHERE productID = '$productID'";

                                $result = $conn->query($sql);

                                if ($result && $result->num_rows > 0) {
                                // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $productName = $row["productName"];
                                        $productPrice = $row["productPrice"];
                                        $range = $row["spacecraftrange"];
                                        $speed = $row["speed"];
                                        $capacity = $row["capacity"];

                                    }
                                } else {
                                    $productName = "N/A";
                                    $productPrice = "N/A";
                                    $range = "N/A";
                                    $speed = "N/A";
                                    $capacity = "N/A";
                                    }

                            $conn->close();
                        ?>
                       <?php include("include/productpageinfo.php");?>
                       <?php

                            // Check if the 'order' button was clicked
                            if (isset($_POST['order'])) {
                                // Assuming you've already included your database connection file at the top
                                include("include/db.php");
                            
                                // Sample values for insertion (replace these with actual values)
                                // Replace 'loggedInUserID' with the name of your session variable containing the userID
                                if (isset($_SESSION['userID'])) {
                                    $loggedInUserID = $_SESSION['userID']; // Use the stored userID from the session
                                    $productID = 13; // Replace with the obtained productID from the webpage or set it to null if not available
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
                            
                                        // Fetch productName and productPrice based on the provided productID
                                        $stmtProduct = $conn->prepare("SELECT productName, productPrice, productURL FROM products WHERE productID = ?");
                                        $stmtProduct->bind_param("i", $productID);
                                        $stmtProduct->execute();
                                        $resultProduct = $stmtProduct->get_result();

                                        // Check if the productID exists in the Products table
                                        if ($resultProduct->num_rows > 0) {
                                            $rowProduct = $resultProduct->fetch_assoc();
                                            $productName = $rowProduct["productName"];
                                            $productPrice = $rowProduct["productPrice"];
                                            $productURL = $rowProduct["productURL"];
                            
                                            // Prepare and execute the SQL statement to insert data into the orders table
                                            $stmt = $conn->prepare("INSERT INTO orders (userID, fullname, productID, productName, numberOfProductsOrdered, productPrice, dateOfOrder, productURL) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                                            $stmt->bind_param("isissdss", $loggedInUserID, $fullname, $productID, $productName, $numberOfProductsOrdered, $productPrice, $dateOfOrder, $productURL);
                                            $stmt->execute();

                            
                                            if ($stmt->affected_rows > 0) {
                                                echo "<div class='message'>
                                                        <center>
                                                            <h1>Order Placed!</h1>
                                                        </center>
                                                    </div><br>";
                                                echo "<a style='color: white !important;' href='javascript:window. history. back();'><button class='btn btn-lg btn-success'>Back to Product Page</button></a>";
                                                exit;
                                            } else {
                                                echo "Error: " . $conn->error;
                                            }
                                        } else {
                                            echo "Product not found.";
                                        }
                                    } else {
                                        echo "User not found.";
                                    }
                            
                                    // Close statements
                                    $stmtUser->close();
                                    $stmtProduct->close();
                                    $stmt->close();
                                } else {
                                    echo "User not logged in.";
                                } // Handle the case where the user is not logged in
                            
                                // Close the database connection
                                $conn->close();
                            }
                            
                            ?>


                        <?php include("include/orderform.php");?>



                                </div>
                </div>
                <div class="product-img">
                    <img class="product-img-size rounded-4" src="images/Zenith-Twilight.jpg" alt="Zenith: Twilight">
                </div>
            </div>
            <br>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>