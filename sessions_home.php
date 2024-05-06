<?php
session_start(); // Mulai session

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    // Jika belum login, arahkan kembali ke halaman login
    header("Location: sessions_login.php"); // Ganti login.php dengan halaman login Anda
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Selamat Datang!</h1>
    <p>Anda telah berhasil login.</p>
    <p><a href="sessions_logout.php">Logout</a></p> <!-- Tambahkan link untuk logout -->
</body>
</html>
