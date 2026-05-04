<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_tia2";

$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$koneksi){
    die("koneksi gagal:" . mysqli_connect_error());
}else{
    echo"koneksi berhasil";
}
?>