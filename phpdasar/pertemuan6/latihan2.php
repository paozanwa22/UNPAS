<?php 
// $mahasiswa = [
//     ["Sandhike Galih", "23123123", "Teknik Informatika", "sandhika@gmail.com"],
//     ["Sandhike Galih", "23123123", "Teknik Informatika", "sandhika@gmail.com"]
// ];

// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Sandhike Galih", 
        "nrp" => "23123123", 
        "jurusan" => "Teknik Informatika", 
        "email" => "sandhika@gmail.com",
        "gambar" => "sandhika.jpeg"
    ],
    [
        "nama" => "Paozan Wadi", 
        "nrp" => "23123123", 
        "jurusan" => "Teknik Informatika", 
        "email" => "sandhika@gmail.com",
        "gambar" => "paozanwadi.jpeg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="">
        </li>
        <li>Nama :<?= $mhs["nama"]; ?></li>
        <li>NRP :<?= $mhs["nrp"]; ?></li>
        <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
        <li>Email :<?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>