<?php 
// Function = potongan program atau baris-baris codeyang kita buat untuk mempermudah kita pada saam memprogram.
// code program tadi, bisa kita beri nama dan memanggil-nya secara berulang-ulang.

// ada dua jenis Function di dalam PHP
// Built-in Function : fungsi yang dimiliki oleh PHP
    //      http://php.net/manual/en/funcref.php
    //      http://php.net/manual/id/funcref.php

// Date / Time
    // Date
    // untuk menampilkan tanggal denga format tertentu
        // echo date("l, d-M-Y");
    // Time

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("l", time()-60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // mktime(0,0,0,3,22,1998);
    // echo date("l", mktime(0,0,0,3,22,1998));

    // strtotime
    // echo strtotime("22 Mart 1998");
    // echo date("l", echo strtotime("22 Mart 1998"));

// String
    // strlen()   :untuk menghitung panjang sebuah string
    // strcmp()   :untuk membandingkan dua buah string
    // explode()  :untuk memecah setring menjadi Array
    // htmlspecialchars()     :untuk menjaga kita orang yang iseng mau masuk ke website kita

// Utility / Fungsi bantuan
    // var_dump()     :untuk debaging
    // isset()        :untuk mengecek apakah sebuah variable sudah pernah di buat atau belum
    // empty()      :apakah sebuah variable itu kosong atau tidak
    // die()        :untuk menghentikan program kita program yang di bawahnya tidak akan di eksekusi
    // sleep()      :untuk memberhentikan sementara
    

// User-Defined Function : fungsi yang kita buat sendiri
    // langsung kita coba di file function.php

?>