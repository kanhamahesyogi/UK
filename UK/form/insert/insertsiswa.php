<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="css/insertsiswa.css">
    <link rel="stylesheet" href="../sidebar/style.css">
    <?php include "../sidebar/sidebar.html" ?>
</head>

<body>
    <div class="background">
        <br><br><br><br>
        <span>Sekarang anda berada di "Insert Data Siswa"</span>
        <div class="luarkotak">
            <h2>INSERT DATA SISWA</h2>
        </div>
        <div class="kotak">
            <div class="dalamkotak">
                <form action="../../config/prosesinsert/prosesinsertsiswa.php" method="post">
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
                            <td><select name="jeniskelamin" class="selectinput">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th>NIS :</th>
                            <th>Angkatan : </th>
                            
                        </tr>
                        <tr>
                            <td><input type="text" disabled name="nis" placeholder="auto"></td>
                            <input style="display: none;" name="nis" type="text">
                            <td><select name="idspp" class="selectinput">
                                    <?php
                                    include('../../koneksi.php');
                                    $query = "SELECT idspp, angkatan FROM tb_spp";
                                    $hasil = mysqli_query($koneksi, $query);

                                    while ($row = mysqli_fetch_assoc($hasil)) {
                                    ?>
                                        <option value="<?php echo $row['idspp']; ?>"><?php echo $row['angkatan']; ?></option>

                                    <?php
                                    }
                                    ?>

                                </select></td>
                           
                        </tr>
                        <tr>
                        <th>Nama Lengkap :</th>
                        </tr>
                        <tr>
                        <td><input type="text" class="alamat" name="namasiswa"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <th>block buat a</th>
                        </tr>
                        <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <th>password :</th>
                            <th>No Telp :</th>
                        </tr>
                        <tr>
                            <td><input type="password" name="password" id=""></td>

                            <td><input type="text" name="notelp"></td>
                        </tr>
                        <tr>
                            <th>Alamat :</th>
                        </tr>
                        <tr>
                            <td><input class="alamat" type="text" name="alamat"></td>
                            <td><input type="text" name="leveluser" hidden value="siswa"></td>
                            <input style="display: none;" name="leveluser" type="text">
                        </tr>
                        <tr>
                            <td><button type="submit" class="kirim">KIRIM</button></td>
                        </tr>
                    </table>
                </form>
                <a href="javascript:history.go(-1)"><button type="submit" class="back">Go Back</button></a>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>