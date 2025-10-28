<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "localhost";
$username = "tttechnicalservices";
$password = "tttechnicalservices";
$dbname = "totaltouch";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("❌ Database connection failed: " . mysqli_connect_error());
}
echo "✅ Connected successfully!";
?>

