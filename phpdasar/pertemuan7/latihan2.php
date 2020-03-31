<?php 
// cek apakah tidak ada data di $_GET
// isset : apakah pernah di bikin
// !isset : apakah belum pernah di bikin
if( !isset( $_GET["nama"]) || 
    !isset( $_GET["nrp"]) || 
    !isset( $_GET["jurusan"]) || 
    !isset( $_GET["email"]) ){
    // redirect
    header("Location:latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
<ul>
    <li>
        <img src="img/<?= $_GET["gambar"]; ?>" alt="">
    </li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nrp"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke latihan1</a>

</body>
</html>