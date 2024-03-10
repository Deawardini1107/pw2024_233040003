<?php 
// 1. Membuat Array
$hari= array("senin", "selasa", "rabu");
$bulan = ["januari","februari","maret"];
$mahasiswa = ["dea", 3.1, false];
// 2. Mencetak isi Array
// mencetak 1 nilai pada array, menggunakan index
// index dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";
// cetak semua isi Array 
// var_dump() atau print_r()
// igunakan saat debuggling 
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
// 3. Manipulasi isi Array
// menambah isi Array
// di akhir: [] atau Array_push()
$hari[]= "kamis";
$hari[]= "kamis";
print_r($hari);
echo "<br>";
array_push($bulan, "april","mei");
print_r($bulan);
echo "<br>";

// di awal: array_unshift()
array_unshift($mahasiswa, "233040003");
print_r($mahasiswa);
echo "<hr>";

// menghapus isi array
// di belakang: array_pop();
// di depan: array_shift();
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);
?>