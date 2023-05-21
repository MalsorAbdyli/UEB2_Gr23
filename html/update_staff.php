<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    // Validate form inputs
    if (empty($id) || empty($name) || empty($email) || !isset($role)) {
        header("Location: manage_staff.php?error=empty");
        exit();
    }

    // Connect to the database
    $connection = mysqli_connect("localhost", "root", "1242140733ma", "user_db");

    // Check if the connection is successful
    if ($connection) {
        // Update the staff member's information in the database
        $query = "UPDATE user_form SET name='$name', email='$email', isAdmin='$role' WHERE id='$id'";

        try {
            $result = mysqli_query($connection, $query);
            
            if ($result) {
                // Redirect back to the manage_staff.php page with a success message
                header("Location: manage_staff.php?success=1");
                exit();
            } else {
                // Redirect back to the manage_staff.php page with an error message
                header("Location: manage_staff.php?error=db");
                exit();
            }
        } catch (Exception $e) {
            // Handle database query exception
            header("Location: manage_staff.php?error=db");
            exit();
        }

        // Close the database connection
        mysqli_close($connection);
    } else {
        echo "Database connection failed.";
    }
}
?>
