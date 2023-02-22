<?php

include('../koneksi.php');

$id = $_GET['angkatan'];

$query = "DELETE FROM tb_spp WHERE angkatan ='$id'";

$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal Menghapus Data SPP" . mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Data DI Delete')
        document.location.href='../../data/dataspp.php';
        </script>
        ";
}