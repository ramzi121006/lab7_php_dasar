<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Predefine Variable</h2>

    <?php
    // Ambil nama dari URL
    $nama = $_GET['nama'];

    echo "Selamat Datang " . $nama;
    ?>
</body>
</html>