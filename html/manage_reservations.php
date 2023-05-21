<?php
// Check if the user is logged in and has admin privileges, otherwise redirect them to a restricted access page or login page
// Establish a connection to the database
$connection = mysqli_connect("localhost", "root", "1242140733ma", "user_db");

// Check if the connection is successful
if (!$connection) {
    die("Database connection failed.");
}

// Check if the form data is submitted for deleting a menu item
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete_id'])) {
    $deleteId = $_POST['delete_id'];

    // Prepare the delete query
    $query = "DELETE FROM contacts WHERE id_reservation = ?";
    $stmt = mysqli_prepare($connection, $query);

    // Bind the value to the prepared statement
    mysqli_stmt_bind_param($stmt, "i", $deleteId);

    // Execute the delete query
    mysqli_stmt_execute($stmt);

    // Close the prepared statement
    mysqli_stmt_close($stmt);

    // Redirect back to the manage menu page or display a success message
    header("Location: manage_menu.php");
    exit();
}

// Query the contacts table to fetch menu items
$query = "SELECT * FROM contacts";
$result = mysqli_query($connection, $query);

// Close the database connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Menu</title>
   
    <link rel="stylesheet" type="text/css" href="admin_styles.css">
    <style>
     
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            color: #333;
        }

      
        h1, p {
            text-align: center;
        }

       
        h1 {
            font-size: 32px;
            margin-top: 50px;
        }

    
        p {
            font-size: 18px;
            margin-top: 20px;
        }

       
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%; 
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Manage Reservations</h1>
    <a href="admin_panel.php" style="margin-left:650px">Go back to Admin Panel</a>
    <p>Add, edit, or delete reservation items here.</p>

    <table>
        <thead>
            <tr>
                <th>Reservation ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Reservation Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
    
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_reservation'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['message'] . "</td>";
                    echo "<td>" . $row['reservation_time'] . "</td>";
                    echo "<td>";
                    echo "<form action='delete_reservations.php' method='POST'>";
                    echo "<input type='hidden' name='delete_id' value='" . $row['id_reservation'] . "'>";
                    echo "<button type='submit'>Delete</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>
