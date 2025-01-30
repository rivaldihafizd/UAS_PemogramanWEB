<?php
$host = "localhost";
$users = "root"; // disesuaikan dengan username MySQL 
$password = ""; // Kosongkan jika tidak ada password
$db   = "uas_web";

$conn = new mysqli($host, $users, $password, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
