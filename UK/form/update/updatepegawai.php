<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/updatepegawai.css">
    <link rel="stylesheet" href="../sidebar/style.css">
    <?php include "../sidebar/sidebar.html"  ?>
<?php
include('../../koneksi.php');
$id = $_GET['idpegawai'];
$query = "SELECT * From tb_pegawai WHERE idpegawai='$id'";
$hasil = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_assoc($hasil)) {
?>

</head>
<body>
    <div class="background">
            <br><br><br><br>
            <span>Sekarang anda berada di "Update Data Pegawai"</span>
            <div class="luarkotak">
                    <h2>UPDATE DATA PEGAWAI</h2>
                </div>
                <div class="kotak">
                    <div class="dalamkotak">
                        <form action="../../config/prosesupdate/prosesupdatepegawai.php" method="post">
                    
                    <table>
                        <tr>
                            <th>ID Pegawai :</th>
                            <th>Level User :</th>
                        </tr>
                        <tr>
                                <td><input type="text" name="idpegawai" disabled value="<?php echo $data['idpegawai']; ?>"></td>
                                <input style="display: none;" name="idpegawai" type="text">
                                <td>
                                    <?php
                                       if ($data['leveluser'] == "admin") {
                                            echo "<select name='leveluser' class='selectinput'>
                                            <option value='Admin'>admin</option>
                                            <option selected value='Pegawai'>pegawai</option>
                                        </select>";
                                       } elseif ($data['leveluser'] == "pegawai") {
                                        echo "<select name='leveuser' class='selectinput'>
                                        <option value='Admin'>admin</option>
                                        <option selected value='Pegawai'>pegawai</option>
                                        </select>";
                                       }
                                    ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Nama Pegawai :</th>
                            <th>No Telp :</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="namapegawai" value="<?php echo $data['namapegawai']; ?>"></td>
                            <td><input type="text" name="notelp" value="<?php echo $data['notelp']; ?>"></td>
                        </tr>
                        <tr>
                        <th>Username :</th>
                        <th>Password :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
                        <td><input type="password" name="password" id="" value="<?php echo $data['password']; ?>"></td>
                        </tr>
                        <tr>
                        <th>Alamat :</th>
                        </tr>
                        <tr>
                        <td><input class="alamat" type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
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