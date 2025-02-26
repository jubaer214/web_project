<?php
$host = "localhost"; // Your database host
$user = "root"; // MySQL username (default: root)
$pass = ""; // MySQL password (default: empty)
$dbname = "auth_system"; // Your database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
