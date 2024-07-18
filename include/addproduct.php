<?php

include"include/db.php";

if (isset($_POST['register'])) {

    // Retrieve data from the form // value from the input name = "username"
    $name = $_POST["productName"]; 
    $price = $_POST["productPrice"];
    $manufacturer = $_POST["productManufacturer"];
    $range = $_POST["range"];
    $speed = $_POST["speed"];
    $capacity = $_POST["capacity"];
    $url = $_POST["url"];

    $check = "SELECT * FROM products WHERE productName ='{$name}'";

    $res = mysqli_query($conn, $check);
    
if (mysqli_num_rows($res) > 0) {
    echo "<div class='message'>
        <center>
        <h1>Please Try Again</h1>
<p>This product already exists</p>
</center>
</div><br>";

        echo "<a href='newproduct.php'><button class='btn btn-secondary btn-lg'>Go Back</button></a>";
        exit;


  } 
  
  else {

    $sql = "INSERT INTO products(productName, productPrice, productManufacturer, spacecraftrange, speed, capacity, productURL) VALUES (
        '$name','$price', '$manufacturer', '$range', '$speed', '$capacity', '$url')";

$result = mysqli_query($conn, $sql);

if ($result) {

    echo "<div class='message'>
    <h1>Spacecraft Added Successfully</h1>
    </div><br>";
    
                echo "<a style='color: white !important;' href='viewproducts.php'><button class='btn btn-success btn-lg'>Add More Spacecraft</button></a>";
                exit;

} 

else {
    echo "<div class='message'>
    <center>
    <h1>Please Try Again</h1>
<p>This product already exists</p>
</center>
</div><br>";

    echo "<a href='newproduct.php'><button class='btn btn-secondary btn-lg'>Go Back</button></a>";
    exit;
}
    
  }
}

?>