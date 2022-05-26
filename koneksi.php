<?php
//Deklarasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugas9";

//Buat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Cek Koneksi
if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}