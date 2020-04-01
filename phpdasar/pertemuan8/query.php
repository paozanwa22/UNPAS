
//cara mengakses app jika tidak tampil
	C:\xampp>xampp-control	//melalui explorer
	C:\xampp>xampp-control	//melalui cmd
//cara mengakses databases
	C:\xampp\mysql\bin	//melalui explorer
	//melalui cmd
	C:\xampp\mysql\bin>mysql		//cara 1
	C:\xampp\mysql\bin>mysql -u root -p	//cara 2
cara yang benar adalah cara 2

untuk mengakses databases dan mengisinya
gunakan query berikut

C:\xampp\mysql\bin>mysql -u root -p
show databases;		//untuk melihat semua databases;
create database phpdasar;	//membuat database php
use phpdasar	//memilih database yang ingin kita gunakan

//membuat table mahasiswa dengan nilai-nilainya
create table mahasiswa (
id int primary key auto_increment,
nama varchar(100),
nrp char(7),		//gunakan tipe data char jika jumlah nilainya sudah pasti
email varchar(100),
jurusan varchar(100),
gambar varchar(100)
);

show tables;		//melihat tamble
describe mahasiswa	//melihat struktur table mahasiswa

//memasukkan nilai ke dalam mahasiswa
insert into mahasiswa values ('','Sandhika Galih','043040023','sandhika@gmail.com','Teknik Informatika','Sandhika.jpeg');

select nrp from mahasiswa;	//menampilkan nrp pada table mahasiswa
select nama, nrp from mahasiswa;	//menampilkan nama dan nrp pada table mahasiswa
select * from mahasiswa where nrp = '043040023';	//menampilkan mahasiswa dengan nrp = 043040023

//merupah jurusan
update mahasiswa set jurusan = 'Teknik Informatika' where id = 2;

//menghapus mahasiswa yang id nya = 3
delete from mahasiswa where id = 3;

drop table mahasiswa;	//menghapus table mahasiswa
drop database phpdasar;	//menghapus database phpdasar

//MEMBUAT DATABASE MELALUI APLIKASI.
aktifkan xampp
tulis di URL localhost/phpmyadmin
tidak perlu saya jelaskan karna itu tinggal di click-click.











	


