<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <!-- akan dijalankan jika tombol submit di tekan -->
<?php if( isset( $_POST["submit"] ) ) : ?>
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>
    <form action="latihan4.php" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="nama" id="username">
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
        </ul>
    </form>
</body>
</html>