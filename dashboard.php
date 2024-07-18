<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith | Admin</title>
    <link rel="stylesheet" href="dashboardstyles.css">
    <link rel="icon" href="images/Letter-Logo-White.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script defer src="app.js"></script>
</head>
<body>
        <div class="nav-container sticky-top">
            <?php include("include/adminNav.php");?>
        </div>

        <section class="center">
        <div class="admin-functions">
            <div class="hidden card">                
                <button class="admin-functions-button"><a href="viewproducts.php"><img class="img-size rounded-3 card-img-top" src="images/Products.jpg" alt="Products"></a></button>
                    <div class="container">
                        <h2>Products</h2>
                    </div>
            </div>
            <div class="hidden card">
                <button class="admin-functions-button"><a href="vieworders.php"><img class="img-size rounded-3" src="images/Orders.jpg" alt="Orders"></a></button>
                    <div class="container">
                        <h2>Orders</h2>
                    </div>
            </div>
            <div class="hidden card">
                <button class="admin-functions-button"><a href="users.php"><img class="img-size rounded-3" src="images/Users.jpg" alt="Users"></a></button>
                    <div class="container">
                        <h2>Users</h2>
                    </div>
            </div>
        </div>
        </section>
        
    
        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>





