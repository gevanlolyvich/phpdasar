<?php 
// variable scope / lingkup variabel
// $x= 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();


//SUPERGLOBALS
//variabel global milik PHP
// merupakan Array Assosiative
// $_GET
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
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan2.php?data1=<?= $mhs["nama"]; ?>&data2=<?= $mhs["nrp"]; ?>&data3=<?= $mhs["email"]; ?>&data4=<?= $mhs["jurusan"]; ?>&data5=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>