<?php
require_once 'db.php';

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql)) {
    header("Location: index.php?success=1");
} else {
    header("Location: index.php?error=1");
}

$conn->close();
?>