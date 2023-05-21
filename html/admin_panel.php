<?php

// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "1242140733ma";
$dbname = "user_db";

$conn = new mysqli($servername, $username, $password, $dbname);

session_start()
?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>/* Reset default styles */
html, body {
    margin: 0;
    padding: 0;
}

/* Set background color and font styles */
body {
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
    color: #333;
}

/* Center align the content */
h1, p, ul {
    text-align: center;
}

/* Style the heading */
h1 {
    font-size: 32px;
    margin-top: 50px;
}

/* Style the paragraph */
p {
    font-size: 18px;
    margin-top: 20px;
}

/* Style the navigation menu */
ul {
    list-style-type: none;
    padding: 0;
    margin-top: 50px;
}

ul li {
    display: inline-block;
    margin-right: 20px;
}

ul li a {
    text-decoration: none;
    color: #333;
    padding: 10px;
    border: 1px solid #333;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

ul li a:hover {
    background-color: #333;
    color: #fff;
}

/* Add more styles as needed */
</style>
</head>
<body>
    <!-- Add your HTML content for the admin panel -->
    <h1>Welcome to the Admin Panel</h1>
    <p>Add your admin-specific content here.</p>
    <ul>
        <li><a href="manage_reservations.php">Manage Reservations</a></li>
        <li><a href="view_orders.php">View Orders</a></li>
        <li><a href="manage_staff.php">Manage Staff</a></li>
        <li><a href="home.html">Logout</a></li>
        <!-- Add more options or links as needed -->
    </ul>

    <!-- Add your JavaScript scripts or link to external scripts -->
    <script src="admin_scripts.js"></script>
</body>
</html>