<?php
header('Content-Type: application/json');

// Database credentials
$servername = "localhost";
$username = "tttechnicalservices";
$password = "tttechnicalservices";
$dbname = "totaltouch";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check DB connection
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]);
    exit();
}

// Get and sanitize form data
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$message = $conn->real_escape_string($_POST['message']);

// Insert into table
$sql = "INSERT INTO contacts (name, email, phone, message) 
        VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success", "message" => "Message submitted successfully!"]);
} else {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Error: " . $conn->error]);
}

$conn->close();
?>
