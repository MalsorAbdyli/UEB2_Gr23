<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Connect to the database
    $connection = mysqli_connect("localhost", "root", "1242140733ma", "user_db");

    // Check if the connection is successful
    if ($connection) {
        // Delete the staff member from the database
        $query = "DELETE FROM user_form WHERE id='$id'";

        $result = mysqli_query($connection, $query);

        if ($result) {
            // Return a success response
            echo "success";
        } else {
            // Return an error response
            echo "error";
        }

        // Close the database connection
        mysqli_close($connection);
    } else {
        echo "Database connection failed.";
    }
}
?>
