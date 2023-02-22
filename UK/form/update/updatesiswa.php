<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="css/updatesiswa.css">
    <link rel="stylesheet" href="../sidebar/style.css">
    <?php include "../sidebar/sidebar.html"  ?>
<?php
include('../../koneksi.php');
$id = $_GET['nis'];
$query = "SELECT * From tb_siswa WHERE nis='$id'";
$hasil = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_assoc($hasil)) {
?>

</head>
<body>
    <div class="background">
            <br><br><br><br>
            <span>Sekarang anda berada di "Update Data Siswa"</span>
            <div class="luarkotak">
                    <h2>UPDATE DATA SISWA</h2>
                </div>
                <div class="kotak">
                    <div class="dalamkotak">
                        <form action="../../config/prosesupdate/prosesupdatesiswa.php" method="post">
                    <table>
                        <tr>
                            <th>ID Kelas :</th>
                            <th>Jenis Kelamin :</th>
                        </tr>
                        <tr>
                            <td><select name="idkelas" class="selectinput">
                                    <?php
                                    include('../../koneksi.php');
                                    $query = "SELECT idkelas, jurusan FROM tb_kelas";
                                    $hasil = mysqli_query($koneksi, $query);

                                    while ($row = mysqli_fetch_assoc($hasil)) {
                                    ?>
                                        <option value="<?php echo $row['idkelas']; ?>"><?php echo $row['jurusan']; ?></option>

                                    <?php
                                    }
                                    ?>

                                </select></td>
                                <td>
                                    <?php
                                       if ($data['jeniskelamin'] == "Perempuan") {
                                            echo "<select name='jeniskelamin' class='selectinput'>
                                            <option value='Laki-Laki'>Laki-Laki</option>
                                            <option selected value='Perempuan'>Perempuan</option>
                                        </select>";
                                       } elseif ($data['jeniskelamin'] == "Laki-Laki") {
                                        echo "<select name='jeniskelamin' class='selectinput'>
                                            <option selected value='Laki-Laki'>Laki-Laki</option>
                                            <option value='Perempuan'>Perempuan</option>
                                        </select>";
                                       }
                                    ?>
                            </td>
                        </tr>
                        <tr>
                            <th>NIS :</th>
                            <th>Nama Lengkap :</th>
                        </tr>
                        <tr>
                            <td><input type="text" disabled name="nis" value="<?= $data['nis']; ?>" ></td>
                            <input style="display: none;" name="nis" type="text" value="<?= $data['nis']; ?>">
                            <td><input type="text" name="namasiswa" value="<?php echo $data['alamat']; ?>"></td>
                        </tr>
                        <tr>
                        <th>password :</th>
                        <th>No Telp</th>
                        </tr>
                        <tr>
                        <td><input type="password" name="password" id="" value="<?php echo $data['password']; ?>"></td>
                        <td><input type="text" name="notelp" value="<?php echo $data['notelp']; ?>"></td>
                        </tr>
                        <tr>
                        <th>Alamat :</th>
                        </tr>
                        <tr>
                        <td><input class="alamat" type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
                            <td><input type="text" name="leveluser" hidden value="siswa"></td>
                            <input style="display: none;" name="leveluser" type="text">
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