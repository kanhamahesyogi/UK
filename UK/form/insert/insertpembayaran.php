<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../insert/css/insertpembayaran.css">
    <link rel="stylesheet" href="../../sidebar/style.css">
    <?php include "../sidebar/sidebar.html" ?>
</head>

<body>
    <div class="background">
        <br><br><br><br>
        <?php
    include("../../koneksi.php");
    $bulan_bayar = $_GET['bulan'];
    $tahun_bayar = $_GET['tahun'];
    $nis = $_GET['nis'];
    $query = "SELECT * FROM tb_siswa INNER JOIN tb_spp USING(idspp) WHERE nis='$nis'";
    $hasil = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($hasil);
        ?>
        <span>Sekarang anda berada di "pembayaran"</span>
        <div class="luarkotak">
            <h2>PEMBAYARAN</h2>
        </div>
        <div class="kotak">
            <div class="dalamkotak">
                <?php
                var_dump($tahun_bayar);
                            ?>
                    <table>
                    <form action="../../config/prosesinsert/prosesinsertpembayaran.php" method="POST">
                        <tr>
                            <th>NIS :</th>
                            <th>Nama Siswa :</th>
                        </tr>
                        <tr>
                                <td><input type="text" name="nis" readonly value="<?= $nis?>"></td>
                                <td><input type="text" name="namasiswa" readonly value="<?= $row ['namasiswa'];?>"></td>
                        </tr>
                        <tr>
                            <th>Tanggal Bayar :</th>
                            <th>Tahun Bayar :</th>
                        </tr>
                        <tr>
                            <td><input type="date" name="tanggalbayar" readonly value="<?= date('Y-m-d')?>"></td>
                            <td><input type="text" name="tahun" readonly value="<?= $tahun_bayar?>"></td>
                        </tr>
                        <tr>
                        <th>Bulan Yang Akan di Bayarkan :</th>
                        <th>Angkatan :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="bulan" readonly value="<?= $bulan_bayar?>"></td>
                        <td><input type="text" name="angkatan" readonly value="<?= $row ['angkatan']?>"></td>
                        </tr>
                        <tr>
                        <th>Jumlah :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="jumlah" class="alamat" readonly value="<?= $row['nominal']?>"></td>
                        </tr>
                        <tr>
                            <td><button type="submit" class="kirim">KIRIM</button></td>
                        </tr>
                        </form>
                    </table>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>