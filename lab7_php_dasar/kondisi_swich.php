<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Kondisi Switch</h2>

    <?php
    $nama_hari = date("l");

    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        case "Wednesday":
            echo "Rabu";
            break;
        case "Thursday":
            echo "Kamis";
            break;
        case "Friday":
            echo "Jumat";
            break;
        case "Saturday":
            echo "Sabtu";
            break;
        default:
            echo "Tidak diketahui";
    }
    ?>
</body>
</html>