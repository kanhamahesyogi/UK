<?php

$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$query = "INSERT INTO tb_kelas values('','$kelas','$jurusan')";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal memasukan data pegawai " . mysqli_query($koneksi,$query));
}

else{
    echo "<script>
        alert('pesan berhasil di simpan')
        document.location.href='../../data/datakelas.php';
        </script>
        ";
}