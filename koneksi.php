<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_mahasiswa";

$db = mysqli_connect($server, $user, $password, $nama_database);
echo "berhasil terkoneksi.....    ";
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>