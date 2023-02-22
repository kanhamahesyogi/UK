<?php

$namapegawai = $_POST['namapegawai'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$leveluser = $_POST['leveluser'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = "INSERT INTO tb_pegawai values('','$namapegawai','$alamat','$notelp','$leveluser','$username','$password')";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data pegawai " . mysqli_query($koneksi,$query));
}

else{
    echo "<script>
        alert('pesan berhasil di simpan')
        document.location.href='../../data/pegawai.php';
        </script>
        ";
}