<?php
$nis = $_POST['nis'];
$idkelas = $_POST['idkelas'];
$namasiswa = $_POST['namasiswa'];
$notelp = $_POST['notelp'];
$idspp = $_POST['idspp'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$password = $_POST['password'];
$leveluser = $_POST['leveluser'];

$query = "INSERT INTO tb_siswa values('','$idkelas','$idspp','$namasiswa',
'$notelp','$alamat','$jeniskelamin','$password','$leveluser')";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data siswa " . mysqli_query($koneksi,$query));
}

else{
    echo "<script>
        alert('pesan berhasil di simpan')
        document.location.href='../../data/datasiswa.php';
        </script>
        ";
}