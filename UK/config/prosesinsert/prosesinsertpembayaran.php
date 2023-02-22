<?php
session_start();
include('../koneksi.php');
$idpegawai = $_SESSION['idpegawai'];
$nis = $_POST['nis'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$tanggal_bayar = date('Y-m-d');
$jumlah_bayar = $_POST['jumlah'];
$status = "Lunas";
$angkatan = $_POST['angkatan'];

$hasil = mysqli_query($koneksi,"INSERT INTO tb_pembayaran VALUES ('','$idpegawai','$nis','$bulan','$tahun','$tanggal_bayar','$jumlah_bayar','$status','$angkatan')");

if(!$hasil) {
    echo "<script>
        alert('Gagal Melakukan Transaksi');
        document.location.href='../../data/detailpembayaran.php';
        </script>
        ";
    die("Gagal Melakukan Transaksi " . mysqli_query($koneksi,"INSERT INTO tb_pembayaran VALUES ('','$idpegawai','$nis','$bulan','$tanggal_bayar','$jumlah_bayar','$status','$angkatan')"));
}

else{
    echo "<script>
        alert('SPP Berhasil di Bayarkan');
        document.location.href='../../data/detailpembayaran.php?nis2=$nis';
        </script>
        ";
}




?>