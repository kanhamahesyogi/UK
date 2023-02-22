<?php
$idpegawai = $_POST['idpegawai'];
$namapegawai = $_POST['namapegawai'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$leveluser = $_POST['leveluser'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "UPDATE tb_pegawai set idpegawai='$idpegawai', namapegawai='$namapegawai', 
alamat='$alamat', notelp='$notelp', leveluser='$leveluser', 
username='$username', password='$password' where idpegawai='$idpegawai'";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal perbaharui data pegawai " .mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Berhasil di perbaharui')
        document.location.href='../../data/pegawai.php'
        </script>
        ";
}