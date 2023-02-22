<?php
session_start();
if(!@$_SESSION['username']){
    echo"<script>alert('Maaf Anda belum login');location.href='../login/login.php'</script>";
}

include('../koneksi.php');
$id_bayar = $_GET['idpembayaran'];
$query = "DELETE FROM tb_pembayaran WHERE idpembayaran ='$id_bayar'";
$hasil = mysqli_query($koneksi, $query);

if(!$hasil) {
    die("Gagal membatakan Pembayaran " . mysqli_error($koneksi, $query));
}

else{
    echo "<script>
        alert('Pembayaran berhasil di Batalkan')
        document.location.href='../../data/pembayaran.php';
        </script>
        ";
}