<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/Letter-Logo-White.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script defer src="app.js"></script>
</head>
<body>
<nav>
    <ul class="nav">
    <li class="navbar-brand back-btn"><i class="bi bi-arrow-left-circle-fill"></i><a href="javascript:window. history. back();"> Back</a></li>
    </ul>
</nav>
<div class="justify-content-center">
<nav>
    <ul class="nav">
    <li class="nav-item mx-auto">
        <a href="index.php"><img src="images/ZenithLogoFinal-White.png" width="170px" alt="logo"></a>
    </li>
    </ul>
</nav>
<br>
</div>
        <section>
            <?php include("include/spacecraftmenu.php");?>
        </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>