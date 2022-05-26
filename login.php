<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "koneksi.php";
if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data); //menghapus karakter atau spasi pada string
        $data = stripslashes($data); //menghapus atau menghilangkan karakter backslash
        $data = htmlspecialchars($data); //mengkonversi karakter tertentu menjadi karakter html
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        header("Location: index.php?error=Email tidak boleh kosong");
        exit();
    } else if (empty($password)) {
        header("Location: index.php?error=Password tidak boleh kosong");
        exit();
    } else {
        //ambil data dari form index.php
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            //query insert data formulir ke dalam database
            $sql = "INSERT login set email='$email', password_akun='$password'";
            $query = mysqli_query($conn, $sql);

            //mengecek apakah query berhasil di insert
            if ($query) {
                //jika berhasil maka akan dialihkan ke halaman cetaklogin.php
                header('location: cetaklogin.php');
            } else {
                //jika gagal tampilkan pesan
                die("Gagal menyimpan perubahan...");
            }
        } else {
            die("Akses dilarang...");
        }
    }
} else {
    header("Location: formlogin.php");
    exit();
}