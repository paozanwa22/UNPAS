// Web Programing UNPAS         chenel
// QuickTipe                    plylist
// QuickTipe#5:VAR,LET,CONST    judul

// membuat JS bersikap seperti bahasa perogram yang lain atau BLOK SCOPE
// gunakan-lah let saat for saja (lebih seringlah menggunakan const)
// untuk meminimalisir state

// var      // jika kita menggunakan var, maka maka kita bisa mengakses variable yang berada pada BLOK SCOPE dan itu seharusnya tidak terjadi
// for( var i=0; i<10; i++ ){
//     console.log(i);
// }
// console.log(i);
// pada JS ini tidak bermasalah. Dan seharusnya tidak bisa.

// JavaScript dibuat dalam 10 hari. dan si pembuat-nya tidak sempat memperbaiki-nya.

// contoh function SCOPE
// function tes(){                      // membuat function tes()
//     for( var i=0; i<10; i++ ){
//         console.log(i);
//     }
// }
// tes();                               // memanggil function yang telah dibuat
// console.log(i);                      // tidak bisa mengambil nilai i. Dan ini baru benar.

// IIFE VS SIAF
// membuat function tidak bernama menggunakan function ekspresion
// var x = function(){

// }
// ATAU
// (function(){     // kurung berfungsi untuk menjalankan function
//     for( var i=0; i<10; i++ ){
//         console.log(i);
//     }
// }());    // () berfungsi untuk menjalan-kan function

// Sekarang kita paham kenapa VAR di ganti dengan LET. Gunakan lah let saat for dan gunakan CONST.