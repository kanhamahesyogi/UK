<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/insertpegawai.css">
    <link rel="stylesheet" href="../sidebar/style.css">
    <?php include "../sidebar/sidebar.html" ?>
</head>
<body>
    <div class="background">
            <br><br><br><br>
            <span>Sekarang anda berada di "Insert Data Pegawai"</span>
            <div class="luarkotak">
                    <h2>INSERT DATA PEGAWAI</h2>
                </div>
                <div class="kotak">
                    <div class="dalamkotak">
                        <form action="../../config/prosesinsert/prosesinsertpegawai.php" method="post">
                    <table>
                        <tr>
                            <th>Level User :</th>
                            <th>ID Pegawai :</th>
                        </tr>
                        <tr>
                                <td><select name="leveluser" class="selectinput">
                                    <option value="admin">Admin</option>
                                    <option value="pegawai">Pegawai</option>
                                </select></td>
                                <td><input type="text" name="idpegawai" disabled placeholder="auto"></td>
                        </tr>
                        <tr>
                            <th>Nama Pegawai :</th>
                            <th>NO Telp :</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="namapegawai"></td>
                            <td><input type="text" name="notelp"></td>
                        </tr>
                        <tr>
                        <th>Username :</th>
                        <th>Password :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="password"></td>
                        <td><input type="password" name="username" id=""></td>
                        </tr>
                        <tr>
                        <th>Alamat :</th>
                        </tr>
                        <tr>
                        <td><input class="alamat" type="text" name="alamat"></td>
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