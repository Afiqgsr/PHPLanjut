<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-gap: 10px;
            padding: 10px;
        }
        .gallery img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="gallery">
        <?php
        $fileList = glob('gambar/*');
        foreach ($fileList as $filename) {
            if (is_file($filename)) {
                echo '<img src="' . $filename . '" alt="Gallery Image">';
            }
        }
        ?>
    </div>
</body>
</html>
