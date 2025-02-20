<?php
// 1. Connect to MySQL
$servername = "localhost";
$username = "root"; // Change if different
$password = ""; // Change if you set a password
$database = "mridangam_db"; // Make sure this matches your database name

$conn = new mysqli($servername, $username, $password, $database);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Get Form Data
$username = $_POST['username'];
$email = $_POST['email'];
$batch = $_POST['message'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

// 3. Insert Data into `users` Table
$sql = "INSERT INTO users (username, email, batch, password) 
        VALUES ('$username', '$email', '$batch', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $conn->error;
}

// 4. Close Connection
$conn->close();
?>
