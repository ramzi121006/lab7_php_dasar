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
        <input type="text" name="nama" required><br><br>

        <label>Tanggal Lahir: </label>
        <input type="date" name="tgl_lahir" required><br><br>

        <label>Pekerjaan: </label>
        <select name="pekerjaan" required>
            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
            <option value="Karyawan">Karyawan</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Freelancer">Freelancer</option>
            <option value="Lainnya">Lainnya</option>
        </select><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // Hitung umur
        $lahir = new DateTime($tgl_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($lahir)->y;

        echo "<h3>Hasil Input:</h3>";
        echo "Nama: $nama <br>";
        echo "Tanggal Lahir: $tgl_lahir <br>";
        echo "Umur: $umur tahun <br>";
        echo "Pekerjaan: $pekerjaan <br>";
    }
    ?>
</body>
</html>