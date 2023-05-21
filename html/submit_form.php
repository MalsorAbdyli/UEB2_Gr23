<?php
// Database credentials
$host = "localhost";
$username = "root";
$password = "1242140733ma";
$database = "user_db";

$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$reservationTime = $_POST['reservation_time'];

// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO contacts (name, email, message, reservation_time) VALUES (?, ?, ?, ?)");
$stmt->bind_param('ssss', $name, $email, $message, $reservationTime);

$response = array(); // Response array for JSON data

if (!empty($reservationTime)) {
    $stmt->execute();
    $response['success'] = true;
    $response['message'] = "Reservation submitted successfully!";
} else {
    $response['success'] = false;
    $response['message'] = "Reservation time is required!";
}

$stmt->close();
$conn->close();

// Convert the response array to JSON format
$responseJson = json_encode($response);
?>

<script>
    // Parse the JSON response
    var response = <?php echo $responseJson; ?>;

    // Display a notification based on the response
    if (response.success) {
        alert(response.message);
        window.location.href = "kontakti.php"; // Redirect to the desired page
    } else {
        alert(response.message);
        window.history.back(); // Go back to the previous page
    }
</script>
