<?php
$conn = new mysqli("localhost", "root", "", "landing_practica");

if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}
?>