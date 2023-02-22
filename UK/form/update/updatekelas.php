<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/updatekelas.css">
    <link rel="stylesheet" href="../sidebar/style.css">
    <?php include "../sidebar/sidebar.html"  ?>
<?php
include('../../koneksi.php');
$id = $_GET['idkelas'];
$query = "SELECT * From tb_kelas WHERE idkelas='$id'";
$hasil = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_assoc($hasil)) {
?>

</head>
<body>
    <div class="background">
            <br><br><br><br>
            <span>Sekarang anda berada di "Update Data Kelas"</span>
            <div class="luarkotak">
                    <h2>UPDATE DATA KELAS</h2>
                </div>
                <div class="kotak">
                    <div class="dalamkotak">
                        <form action="../../config/prosesupdate/prosesupdatekelas.php" method="post">

                    <table>
                        <tr>
                            <th>ID Kelas :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="idkelas" disabled value="<?= $data['idkelas']; ?>" ></td>
                        <input style="display: none;" name="idkelas" type="text" value="<?= $data['idkelas']; ?>">
                        </tr>
                        <tr>
                            <th>Kelas :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="kelas" value="<?= $data['kelas']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Jurusan :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>"></td>
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