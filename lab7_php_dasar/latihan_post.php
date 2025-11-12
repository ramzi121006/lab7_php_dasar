<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>

    <form method="post" action="">
        <label>Nama: </label>
        <input type="text" name="nama" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        echo "<h3>Halo $nama, selamat datang di praktikum web.</h3>";
    }
    ?>
</body>
</html>