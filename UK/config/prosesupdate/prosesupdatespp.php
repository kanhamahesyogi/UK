<?php
$angkatan = $_POST['angkatan'];
$nominal = $_POST['nominal'];

$query = "UPDATE tb_spp set angkatan='$angkatan', nominal='$nominal'where angkatan='$angkatan'";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal perbaharui data SPP " .mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Berhasil di perbaharui')
        document.location.href='../../data/dataspp.php'
        </script>
        ";
}