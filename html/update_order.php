<?php
// Establish a connection to the database
$connection = mysqli_connect("localhost", "root", "1242140733ma", "user_db");

// Check if the connection is successful
if (!$connection) {
    die("Database connection failed.");
}

// Check if the form data is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $id = $_POST['id'];
    $customerName = $_POST['customer_name'];
    $shippingAddress = $_POST['shipping_address'];

    // Prepare the update query
    $query = "UPDATE payments SET emri = ?, adresa = ? WHERE id_payment = ?";
    $stmt = mysqli_prepare($connection, $query);

    // Bind the values to the prepared statement
    mysqli_stmt_bind_param($stmt, "ssi", $customerName, $shippingAddress, $id);

    // Execute the update query
    mysqli_stmt_execute($stmt);

    // Check if any rows were affected by the update operation
    $affectedRows = mysqli_stmt_affected_rows($stmt);
    if ($affectedRows > 0) {
        // Update successful
        // Redirect back to the view orders page or display a success message
        header("Location: view_orders.php");
        exit();
    } else {
        // No rows affected, update failed
        // Display an error message or redirect back to the view orders page
        echo "Update failed.";
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($connection);
?>
