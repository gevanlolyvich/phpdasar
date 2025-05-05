<?php
    $mahasiswa = [
        ["gevan", "10921083187", "teknik komputer", "rezagevan@gmail.com"],
        ["gevin", "10921083187", "teknik electro", "rezigevin@gmail.com"],
        ["gevon", "10921083187", "teknik industry", "rezigevin@gmail.com"],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>data mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>