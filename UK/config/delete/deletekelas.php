<?php

include('../koneksi.php');

$id = $_GET['idkelas'];

$query = "DELETE FROM tb_kelas WHERE idkelas ='$id'";

$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal Menghapus Data Kelas" . mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Data DI Delete')
        document.location.href='../../data/datakelas.php';
        </script>
        ";
}