<?php

include('../koneksi.php');

$id = $_GET['nis'];

$query = "DELETE FROM tb_siswa WHERE nis ='$id'";

$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal Menghapus Data Siswa" . mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Data DI Delete')
        document.location.href='../../data/datasiswa.php';
        </script>
        ";
}