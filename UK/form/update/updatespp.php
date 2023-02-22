<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/updatespp.css">
    <link rel="stylesheet" href="../sidebar/style.css">
    <?php include "../sidebar/sidebar.html"  ?>
<?php
include('../../koneksi.php');
$id = $_GET['angkatan'];
$query = "SELECT * From tb_spp WHERE angkatan='$id'";
$hasil = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_assoc($hasil)) {
?>

</head>
<body>
    <div class="background">
            <br><br><br><br>
            <span>Sekarang anda berada di "Update Data SPP"</span>
            <div class="luarkotak">
                    <h2>UPDATE DATA SPP</h2>
                </div>
                <div class="kotak">
                    <div class="dalamkotak">
                        <form action="../../config/prosesupdate/prosesupdatespp.php" method="post">
                    <table>
                        <tr>
                            <th>Angkatan :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="angkatan" value="<?= $data['angkatan']; ?>" ></td>
                        </tr>
                        <tr>
                            <th>Nominal :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="nominal" value="<?= $data['nominal']; ?>"></td>
                        </tr>
                        <tr>
                        <td><button type="submit" class="kirim">KIRIM</button></td>
                        </tr>                        
                    </table>

                    </form>
                    <a href="javascript:history.go(-1)"><button type="submit" class="back">KEMBALI</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</body>
</html>