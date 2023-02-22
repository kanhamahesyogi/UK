<?php
$idspp = $_POST['idspp'];
$angkatan = $_POST['angkatan'];
$nominal = $_POST['nominal'];

$query = "INSERT INTO tb_spp values('','$angkatan','$nominal')";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data SPP " . mysqli_query($koneksi,$query));
}

else{
    echo "<script>
        alert('pesan berhasil di simpan')
        document.location.href='../../data/dataspp.php';
        </script>
        ";
}