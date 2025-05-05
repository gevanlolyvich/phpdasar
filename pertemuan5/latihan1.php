<?php 
// array
// variable yang memiliki banyak nilai 
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key -nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");
//cara baru
$bulan = ["january", "February", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen
// echo $arr1[0];
// echo $bulan[1];

// menambahkan element baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
var_dump($hari);
?>