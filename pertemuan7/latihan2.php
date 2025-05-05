<?php
    //cek apakah tidak ada data di $_GET
    if (!isset($_GET["data1"]) ||
        !isset($_GET["data2"]) ||
        !isset($_GET["data3"]) ||
        !isset($_GET["data4"]) ||
        !isset($_GET["data5"]) ) {
        //klo TRUE gunakan redirect
        header("Location: latihan1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <ul>
        <li>
            <?= $_GET["data1"]; ?>
        </li>
        <li><?= $_GET["data2"]; ?></li>
        <li><?= $_GET["data3"]; ?></li>
        <li><?= $_GET["data4"]; ?></li>
        <li>
            <img src="img/<?= $_GET["data5"]; ?>" alt="">
        </li>
    </ul>
    <a href="latihan1.php">kembali ke halaman awal</a>
</body>
</html>