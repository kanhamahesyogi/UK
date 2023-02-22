<?php
$nis = $_POST['nis'];
$idkelas = $_POST['idkelas'];
$namasiswa = $_POST['namasiswa'];
$notelp = $_POST['notelp'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$leveluser = $_POST['leveluser'];
$password = $_POST['password'];



$query = "UPDATE tb_siswa set nis='$nis', idkelas='$idkelas', 
namasiswa='$namasiswa', notelp='$notelp', alamat='$alamat', jeniskelamin='$jeniskelamin', leveluser='$leveluser', password='$password' where nis='$nis'";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal perbaharui data siswa " .mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Berhasil di perbaharui')
        document.location.href='../../data/datasiswa.php'
        </script>
        ";
}