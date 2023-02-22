<?php
$idkelas = $_POST['idkelas'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$query = "UPDATE tb_kelas set idkelas='$idkelas', kelas='$kelas', 
jurusan='$jurusan' where idkelas='$idkelas'";

include ('../koneksi.php');
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal perbaharui data kelas " .mysqli_error($koneksi));
}

else{
    echo "<script>
        alert('Berhasil di perbaharui')
        document.location.href='../../data/datakelas.php'
        </script>
        ";
}