<?php

$server ="localhost";
$user ="root";
$pass ="";
$database ="uk";

$koneksi = mysqli_connect($server, $user, $pass, $database);

if(!$koneksi){
    die("<script>alert('Gagal Tersambung ke database!')</script>");
}
?>