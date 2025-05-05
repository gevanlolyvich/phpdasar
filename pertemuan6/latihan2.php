<?php 
// $mahasiswa = [
//     ["gevan", "190298032", "rezagevan@gmail.com", "teknik komputer"],
//     ["gevin", "190298032", "rezagevan@gmail.com", "teknik electro"],
// ];

//Array Associative 
//Definisinya sama seperti array numerik, kecuali
//key-nya adalaha string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "gevan",
        "nrp" => "1909210319",
        "email" => "rezagevan@gmail.com",
        "jurusan" => "Teknik Komputer",
        "gambar" => "gevan.jpeg"
    ],
    [
        "nama" => "gevin",
        "nrp" => "1909210319",
        "email" => "rezagevan@gmail.com",
        "jurusan" => "Teknik electro",
        "gambar" => "gevin.jpeg"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        .clear {
            clear : both;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"] ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusann : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
    <div class="clear"></div>
</body>
</html>