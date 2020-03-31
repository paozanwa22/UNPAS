<?php 
// variable Scope / lingkup variable

// $x = 10;
// function tampilX() {
//     echo $x;
// }
// tampilX();

// $x = 10;
// tidak di ketahui oleh function tampilX() / tidak bisa di akses

// untuk bisa mengakses variable yang berada di luar function kita harus menggunakan global
// $x = 10;
// function tampilX() {
//     global $x;
//     echo $x;
// }
// tampilX();

//     global $x;       // untuk menandakan kalau yang kita maksud adalah $x yang berada di luar function

// SUPERGLOBALS
// variable global milik PHP
// merupakana Array Assosiative
// $_GET        -
// $_POST       -
// $_REQUEST
// $_SESSION    -
// $_COOKIE     -
// $_SERVER
// $_NET

// untuk menampilkan isi SUPERGLOBAL
// var_dump($_GET);

// $_GET
    // Cara 1 memasukkan nilai ke kalam-nya
    // $_GET["nama"] = "Sandhika Galih";
    // $_GET["nama"] = "043040023";
    // var_dump($_GET);

    // Cara 1 memasukkan nilai ke kalam-nya
    // melalui URL
    // tambahkan di akhir URL   //   ?nama=Sandhika Galih
    // ?  // di baca "saya akan memasukkan data ke halaman ini menggunakan metode reques GET".
    // kemudian data tersebut akan di tangkap oleh variable super global $_GET.

    // untuk menambahkan nilai lagi ke dalam-nya
    // &nrp=043040023  //melanjudkan di URL

// 
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
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li><a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>"></a><?= $mhs["nama"]; ?></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>