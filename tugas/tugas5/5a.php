<?php
$mahasiswatif = [
    [
        "nama" => "Dea Wardini",
        "nrp" => "233040003",
        "email" => "deawardini90@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dea.jpeg",
    ],
    [
        "nama" => "Ariska Putri",
        "nrp" => "233040041",
        "email" => "ariskaputri918@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ariska.jpeg",
    ],
    [
        "nama" => "Daffa Kamiliya Mufidah",
        "nrp" => "233040055",
        "email" => "kamiliyamufidah16@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "amel.jpeg",
    ],
    [
        "nama" => "Maelani Ningrum",
        "nrp" => "233040164",
        "email" => "maelaniningrum@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "maelani.jpeg",
    ],
    [
        "nama" => "Amaliyah Nur Haida jum'ati",
        "nrp" => "233040082",
        "email" => "Amaliyahnurhaida@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ama.jpeg",
    ],
    [
        "nama" => "Icha Aprilia Putri",
        "nrp" => "233040108",
        "email" => "ap8771067@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ica.jpeg",
    ],
    [
        "nama" => "Desi Hafita Ashri",
        "nrp" => "233040165",
        "email" => "desihafita@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "desi.jpeg",
    ],
    [
        "nama" => "Park Chan Yeol",
        "nrp" => "21022333",
        "email" => "chanyeol@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "chanyeol.jpeg",
    ],
    [
        "nama" => "Suho",
        "nrp" => "21022334",
        "email" => "suho@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "suho.jpeg",
    ],
    [
        "nama" => "Sehun",
        "nrp" => "21022335",
        "email" => "sehun@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "sehun.jpeg",
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar 10 Mahasiawa TIF</title>
    <style>
        img{
        width: 100px;
        height: 100px;
        border: 2px solid;

        }
    </style>
</head>

<body>
    <h1>Daftar 10 Mahasiswa TIF</h1>

    <?php foreach ($mahasiswatif as $tif) : ?>
        <ul>
            <li>
                <img src="img/<?= $tif["gambar"]; ?>">
            </li>
            <li>Nama : <?= $tif["nama"]; ?></li>
            <li>NRP : <?= $tif["nrp"]; ?></li>
            <li>Email : <?= $tif["email"]; ?></li>
            <li>Jurusan : <?= $tif["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>