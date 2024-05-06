<!DOCTYPE html>
<html>
<head>
    <title>Data JSON</title>
</head>
<body>

<?php
// Membuat array dengan index nama dan umur
$data = [
    ["nama" => "Andi", "umur" => 25],
    ["nama" => "Budi", "umur" => 30],
    ["nama" => "Cindy", "umur" => 22],
    ["nama" => "Dewi", "umur" => 27],
    ["nama" => "Eka", "umur" => 35],
    ["nama" => "Fani", "umur" => 29],
    ["nama" => "Gita", "umur" => 31],
    ["nama" => "Hadi", "umur" => 26],
    ["nama" => "Ina", "umur" => 33],
    ["nama" => "Joko", "umur" => 28],
    ["nama" => "Kris", "umur" => 24],
    ["nama" => "Lia", "umur" => 32],
    ["nama" => "Mira", "umur" => 36],
    ["nama" => "Nina", "umur" => 23],
    ["nama" => "Omar", "umur" => 34]
];

// Mengonversi ke format JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);
?>

<!-- Menampilkan data JSON dalam format HTML -->
<pre><?php echo $jsonData; ?></pre>

</body>
</html>
