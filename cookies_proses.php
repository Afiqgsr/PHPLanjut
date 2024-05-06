<?php
// Inisialisasi variabel agar tidak muncul warning
$nim = $nama = $email = $tempat = $tanggal_lahir = $alamat = $jenis_kelamin = "";

// Jika formulir sudah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan data formulir ke dalam cookies
    if (isset($_POST["nim"])) {
        $nim = $_POST["nim"];
        setcookie("nim", $nim, time() + (86400 * 30), "/"); // 30 hari
    }
    if (isset($_POST["nama"])) {
        $nama = $_POST["nama"];
        setcookie("nama", $nama, time() + (86400 * 30), "/");
    }
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        setcookie("email", $email, time() + (86400 * 30), "/");
    }
    if (isset($_POST["tempat"])) {
        $tempat = $_POST["tempat"];
        setcookie("tempat", $tempat, time() + (86400 * 30), "/");
    }
    if (isset($_POST["tanggal_lahir"])) {
        $tanggal_lahir = $_POST["tanggal_lahir"];
        setcookie("tanggal_lahir", $tanggal_lahir, time() + (86400 * 30), "/");
    }
    if (isset($_POST["alamat"])) {
        $alamat = $_POST["alamat"];
        setcookie("alamat", $alamat, time() + (86400 * 30), "/");
    }
    if (isset($_POST["jenis_kelamin"])) {
        $jenis_kelamin = $_POST["jenis_kelamin"];
        setcookie("jenis_kelamin", $jenis_kelamin, time() + (86400 * 30), "/");
    }

    header("Location: cookies_pendaftaran.html");
    exit;
}
?>
