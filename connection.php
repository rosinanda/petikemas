<?php
$server = "localhost"; 
$username = "root";
$password = "";
$database = "tresnamuda";

// Membuat koneksi
$conn = mysqli_connect($server, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika berhasil
// echo "Koneksi berhasil!";
?>
