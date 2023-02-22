<?php

include('../koneksi.php');

$id = $_GET['idpegawai'];

$query = "DELETE FROM tb_pegawai WHERE idpegawai ='$id'";

$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal Menghapus Data Pegawai" . mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Data DI Delete')
        document.location.href='../../data/pegawai.php';
        </script>
        ";
}