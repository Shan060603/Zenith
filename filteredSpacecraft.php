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
            <li class="navbar-brand"><i class="bi bi-arrow-left-circle-fill"></i><a href="viewspacecrafts.php">Back to Spacecraft Catalogue</a></li>
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
    <center>
        <h2>Filtered Spacecraft List</h2>
        <p>Enter your spacecraft's desired attributes, click "Apply Filter" to show available spacecraft.</p>
    </center>
    <div class="filter-spacecraft">
    <div class="left-container">
    <form id="filterForm" class="form-inline" method="POST">
        <div class="form-group">
            <center>
            <h2>Configure Spacecraft Attributes</h2>
            <label for="rangeInput">Spacecraft Range(in lightyears):</label>
            <input class="form-control filter-input" type="number" min="0" max="200000" id="rangeInput" name='spacecraftrange'>
            <br>
            <label for="speedInput">Speed(kph in vacuum):</label>
            <input class="form-control filter-input" type="number" min="0" max="200000" id="speedInput" name='speed'>
            <br>
            <label for="capacityInput">Crew/Passenger Capacity:</label>
            <input class="form-control filter-input" type="number" min="0" max="100000" id="capacityInput" name='capacity'>
            <br>
            <label for="priceInput">Price:</label>
            <input class="form-control filter-input" type="number" min="0" max="100000000000000" id="priceInput" name='price'>
            </center>
        </div>
        <hr>
        <button type="submit" name="filter" value="filter" class="btn btn-dark mb-2" id="applyFilters">Apply Filter</button>
    </form>
    </div>
    
    <div class="table-container right-container">
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
            <tbody id="tableBody">
                <!-- Table data will be dynamically populated here -->
            </tbody>
        </table>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const filterForm = document.getElementById('filterForm');
    const tableBody = document.getElementById('tableBody');
    const applyFiltersBtn = document.getElementById('applyFilters');

    applyFiltersBtn.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default form submission behavior
        
        const formData = new FormData(filterForm); // Get form data
        
        // Send form data using fetch API
        fetch('include/filterproducts.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            tableBody.innerHTML = data; // Populate table with retrieved data
        })
        .catch(error => console.error('Error:', error));
    });
});

    </script>
    <script>
    function redirectToProductPage(productPageURL) {
        // Redirect to the product page using the productPageURL
        window.location.href = productPageURL;
    }
    </script>
</body>
</html>
