<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// cek apakah tombol submit pernah di tekan atau belum
if( isset($_POST['submit']) ){
    // ambil data dari tiap elemen dalam form
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $gambar = $_POST['gambar'];

    // query insert data
    $query = "INSERT INTO mahasiswa VALUE
                ('','$nrp','$nama','$email','$jurusan','$gambar')
            ";
    mysqli_query($conn, $query);

    // cek apakah berhasil di tambah atau tidak
    if( mysqli_affected_rows($conn) > 0 ){
        echo "Data berhasil di tambah!";
    } else {
        echo "Data gagal di tambah";
        echo "<br>";
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>