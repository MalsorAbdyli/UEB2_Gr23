<?php
// Check if the staff ID is provided via POST
if (isset($_POST['staff_id'])) {
    $staffId = $_POST['staff_id'];

    // Connect to the database
    $connection = mysqli_connect("localhost", "root", "1242140733ma", "user_db");

    // Check if the connection is successful
    if ($connection) {
        // Query the user_form table to fetch the staff member with the provided ID
        $query = "SELECT * FROM user_form WHERE id = $staffId";
        $result = mysqli_query($connection, $query);

        // Check if the staff member exists
        if (mysqli_num_rows($result) > 0) {
            // Fetch the staff member's details
            $staffMember = mysqli_fetch_assoc($result);

            // Close the database connection
            mysqli_close($connection);

            // Display the staff member details in a popup
            echo "
            <script>
                function openEditForm() {
                    document.getElementById('editForm').style.display = 'block';
                }
                function closeEditForm() {
                    document.getElementById('editForm').style.display = 'none';
                }
            </script>
            <div id='editForm' style='display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #f5f5f5; padding: 20px; border: 1px solid #ccc; border-radius: 4px;'>
                <h1>Edit Staff Member</h1>
                <form action='update_staff.php' method='post'>
                    <input type='hidden' name='staff_id' value='".$staffMember['id']."'>
                    Name: <input type='text' name='name' value='".$staffMember['name']."'><br>
                    Email: <input type='email' name='email' value='".$staffMember['email']."'><br>
                    Role: <input type='text' name='role' value='".$staffMember['isAdmin']."'><br>
                    <button type='submit'>Update</button>
                    <button type='button' onclick='closeEditForm()'>Cancel</button>
                </form>
            </div>
            <button type='button' onclick='openEditForm()'>Edit</button>";
        } else {
            // Staff member not found
            echo "Staff member not found.";
        }
    } else {
        // Database connection failed
        echo "Database connection failed.";
    }
} else {
    // Staff ID not provided
    echo "Staff ID not provided.";
}
?>

   