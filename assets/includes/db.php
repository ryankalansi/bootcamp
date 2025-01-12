<?php
$host = "localhost";
$user = "root";
$password = ""; // Sesuaikan dengan password XAMPP Anda (default kosong)
$dbname = "bootcamp"; // Nama database Anda

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
