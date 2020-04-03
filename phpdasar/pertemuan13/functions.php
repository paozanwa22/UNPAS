<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // upload gambar
    $gambar = upload();
    if( !$gambar ){
        return false;
    };

    $query = "INSERT INTO mahasiswa VALUE
                ('','$nama','$nrp','$email','$gambar','$jurusan')
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES["gambar"]["name"];
    $tmpName = $_FILES["gambar"]["tmp_name"];
    $error = $_FILES["gambar"]["error"];
    $ukuranFile = $_FILES["gambar"]["size"];

    // cek apakah tidak ada gambar yang di upload
    if( $error === 4 ){
        echo "<script>
                alert('Pilih Gambar terlebih dahulu');
            </script>";
        return false;
    }

    // cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg','png','jpeg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
        echo "<script>
                    alert('yang anda masukkan bukan gambar');
                </script>";
        return false;
    }

    // cek ukuran file terlalu besar
    if( $ukuranFile > 1000000 ){
        echo "<script>
                    alert('Ukuran file terlalu besar.');
                </script>";
        return false;
    }

    // lolos pengecekkan, gambar siap di upload (tes 1)
    // move_uploaded_file($tmpName, 'img/' . $namaFile); //problem : menimpa nama file gambar lama.

    // lolos pengecekkan, gambar siap di upload (tes 2)
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/'. $namaFileBaru);

    return $namaFileBaru;
}

function hapus( $id ){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $_GET["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    
    // apakah user memilih gambar baru atau tidak
    if( $_FILES["gambar"]["error"] === 4 ){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nrp = '$nrp',
                email = '$email',
                gambar = '$gambar',
                jurusan = '$jurusan'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
    ";
    return query($query);
}



?>