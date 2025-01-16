<?php


$host = "localhost";
$username = "root";
$password = "";
$database = "idekreatif";


$com = mysqli_connet($host, $username, $password, $database);


if ($com->connet_error) {

    die("Database gagal terkoneksi: " . $com->connet_error);
}


?>