<?php 
$mahasiswa = [
    ["Sandhike Galih", "23123123", "Teknik Informatika", "sandhika@gmail.com"],
    ["Sandhike Galih", "23123123", "Teknik Informatika", "sandhika@gmail.com"]
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
    <!-- menampilkan isi Array cara 3 -->
    <!-- mampu menampilan isi array yang banyak -->
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama :<?= $mhs[0]; ?></li>
        <li>NRP :<?= $mhs[1]; ?></li>
        <li>Jurusan :<?= $mhs[2]; ?></li>
        <li>Email :<?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>

<!-- Kalau menggunakan teknik ini, urutan isi aray tidak boleh salah. -->
<!-- karna ini adalah Array Numerik //Array yang index-nya angka. -->
<!-- key = index    &   value = nilai -->
<!-- utnuk mengatasi masalah ini, kita menggunakan Array Assosiatif -->
<!-- dimana index = string yang kita buat sendiri untuk mengasosiasikan ke nilai yang ada di dalam Array -->
<!-- assosiatif = array yang ber asossiasi dengan nilai-nya -->