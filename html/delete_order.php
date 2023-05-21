<?php
    // Check if the order ID is provided
    if(isset($_GET['id'])) {
        // Get the order ID from the URL
        $orderId = $_GET['id'];

        // Connect to the database
        $connection = mysqli_connect("localhost", "root", "1242140733ma", "user_db");

        // Check if the connection is successful
        if($connection) {
            // Prepare the delete query
            $query = "DELETE FROM payments WHERE id_payment = '$orderId'";

            // Execute the delete query
            $result = mysqli_query($connection, $query);

            // Check if the delete operation was successful
            if($result) {
                // Redirect back to the view orders page
                header("Location: view_orders.php");
                exit();
            } else {
                // Display an error message
                echo "Failed to delete the order.";
            }

            // Close the database connection
            mysqli_close($connection);
        } else {
            echo "Database connection failed.";
        }
    } else {
        // If the order ID is not provided, redirect back to the view orders page
        header("Location: view_orders.php");
        exit();
    }
?>
