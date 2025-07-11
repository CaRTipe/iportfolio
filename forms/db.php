<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "contact";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function addMessage($name, $email, $subject, $message) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
?>