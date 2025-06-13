<?php
include "connection.php"; // pastikan $conn didefinisikan di file ini

session_start(); // Mulai session di awal

if (!isset($_POST["username_shipper"]) || !isset($_POST["password_shipper"])) {
    header("Location: login_singgah.php");
    exit();
}

$username_shipper = addslashes($_POST["username_shipper"]);
$password_shipper = md5($_POST["password_shipper"]);

$query = "SELECT * FROM shipper WHERE username_shipper='$username_shipper' AND password_shipper='$password_shipper'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

$rowCheck = mysqli_num_rows($result);

if ($rowCheck > 0) {
    $row = mysqli_fetch_assoc($result);
    
    $_SESSION['username_shipper'] = $row['username_shipper']; // simpan session
    echo "Login berhasil..!!";
    header("Location: template.php");
    exit();
} else {
    echo "Invalid username or password";
}
?>
