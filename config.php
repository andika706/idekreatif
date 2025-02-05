<?php

//konfirgurasi koneksi database
$host = "localhost";//nama host server database
$username = "root";//username untuk akses ke database
$password = "";//password untuk akses ke database
$database = "idekreatif";//nama database yang digunakan

// membuat koneksi ke databasemenggunakan database mysqli
$conn = mysqli_connect($host, $username, $password, $database);

// mengecek apakah koneksi berhasil
if ($conn->connect_error) {
     //menampilkan pesan eror jika koneksi gagal
    die("Database gagal terkoneksi: " . $conn->connect_error);

    // jika koneksi berhasil script akan jalan tanpa pesan eror
    
}
?>