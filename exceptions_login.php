<?php
session_start(); // Mulai session

$name = $password = "";
$nameErr = $passwordErr = "";
$loginErr = "";

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["u"])) {
        $nameErr = "Masukkan username";
    } else {
        $name = bersihkan_input($_POST["u"]);
    }
    if (empty($_POST["p"])) {
        $passwordErr = "Masukkan password";
    } else {
        $password = bersihkan_input($_POST["p"]);
    }

    // Cek apakah username dan password sesuai
    // Misalnya, Anda bisa membandingkan dengan data yang tersimpan di database
    try {
        if ($name === "afiq" && $password === "afiq123") {
            // Jika sesuai, set session dan arahkan ke halaman selanjutnya
            $_SESSION["logged_in"] = true;
            header("Location: sessions_home.php"); // Ganti welcome.php dengan halaman yang ingin dituju setelah login
            exit(); // Pastikan untuk keluar setelah melakukan pengalihan header
        } else {
            throw new Exception("Username atau password salah");
        }
    } catch (Exception $e) {
        $loginErr = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error {
            color: red;
            font-size: smaller;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="u" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Password: <input type="password" name="p">
    <span class="error">* <?php echo $passwordErr;?></span>
    <br><br>
    <span class="error"><?php echo $loginErr;?></span><br><br> <!-- Tampilkan pesan kesalahan login -->
    <input type="submit" value="Login">
    </form>
</body>
</html>
