<?php
session_start();
include("../koneksi.php");

$username = $_POST['username'];
$nis = $_POST['username'];
$password = $_POST['password'];


$hasil_petugas = mysqli_query($koneksi,"SELECT * FROM tb_pegawai WHERE username='$username' AND password = '$password'");
$cek_petugas = mysqli_num_rows($hasil_petugas);
$baris_petugas = mysqli_fetch_assoc($hasil_petugas);


$hasil_siswa = mysqli_query($koneksi,"SELECT * FROM tb_siswa WHERE nis='$nis' AND password = '$password'");
$cek_siswa = mysqli_num_rows($hasil_siswa);
$baris_siswa = mysqli_fetch_assoc($hasil_siswa);

if($cek_petugas > 0){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['nama'] = $baris_petugas['namapegawai'];
    $_SESSION['idpegawai'] = $baris_petugas['idpegawai'];
    $_SESSION['leveluser'] = $baris_petugas['leveluser'];
    header("location:../data/beranda.php");
}
 elseif ($cek_siswa > 0) {
    $_SESSION['username'] = $nis;
    $_SESSION['password'] = $password;
    $_SESSION['nama'] = $baris_siswa['namasiswa'];
    $_SESSION['level_user'] = "siswa";

    
    header("location:../data/datasiswa.php");
} 

else {
    echo "<script>alert('Maaf Password atau Username Anda salah')</script>";
    echo "<script>document.location.href='../login/login.php'</script>";
}


?>