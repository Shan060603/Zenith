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

<form method="POST" action="#" style="border:1px solid #ccc">
  <div class="product-table-container">
  <nav>
    <ul class="nav">
    <li class="navbar-brand"><i class="bi bi-arrow-left-circle-fill"></i><a href="viewproducts.php">Back to Spacecraft List</a></li>
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

    <h1>Add Spacecraft</h1>

    <p>Please fill in this form to add new spacecraft to Zenith's database.</p>
    <hr>

    <?php include("include/addproduct.php");?>

    <label for="productName"><b>Spacecraft Name</b></label>
    <input class="form-control" type="text" placeholder="Enter Product Name" name="productName" required>
    <br>
    <label for="productPrice"><b>Price</b></label>
    <input class="form-control" type="number" step=".01" min="0" placeholder="Enter Product Price" name="productPrice" required>
    <br>
    <label for="productManufacturer"><b>Manufacturer</b></label>
    <input class="form-control" type="text" placeholder="Enter Product Manufacturer" name="productManufacturer" required>
    <br>

    <h1>Spacecraft Specifications</h1>

    <hr>
    <label for="range"><b>Range of Single Jump (in lightyears)</b></label>
    <input class="form-control" type="number" step=".01" min="0" placeholder="Enter Spacecraft Range" name="range" required>
    <br>
    <label for="speed"><b>Spacecraft Cruising Speed (kph in vacuum)</b></label>
    <input class="form-control" type="number" step=".01" min="0" placeholder="Enter Spacecraft Cruising Speed" name="speed" required>
    <br>
    <label for="speed"><b>Crew Capacity</b></label>
    <input class="form-control" type="number" min="0" placeholder="Enter Crew Capacity" name="capacity" required>
    <br>
    <label for="url"><b>Spacecraft Image URL (images/image-file-name.png)</b></label>
    <input class="form-control" type="text" placeholder="Enter Image URL" name="url" required>
    <br>

    

    <div class="clearfix">
      <button type="submit" name="register" id="submit" value="Signup" class="signupbtn btn btn-lg btn-block btn-outline-info rounded-3">Add New Spacecraft</button>
      <h1> </h1>
      <button type="reset" value="reset" class="cancelbtn btn btn-outline-danger btn-lg btn-block rounded-3">Cancel</button>
    </div>
  </div>
</form>

</body>
</html>