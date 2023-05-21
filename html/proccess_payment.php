<?php
$host = "localhost"; // replace with your host
$username = "root"; // replace with your username
$password = "1242140733ma"; // replace with your password
$database = "user_db"; // replace with your database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
// Check if the form is submitted


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $emri = $_POST["emri"];
    $karta = $_POST["karta"];
    $data = $_POST["data"];
    $kodi = $_POST["kodi"];
    $adresa = $_POST["adresa"];

    // Insert the payment details into the database
    $sql = "INSERT INTO payments (emri, karta, data, kodi, adresa) VALUES ('$emri', '$karta', '$data', '$kodi', '$adresa')";
    
    
    if ($conn->query($sql) === TRUE) {
        echo "Payment inserted successfully!";
        header('location:../html/cart.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

