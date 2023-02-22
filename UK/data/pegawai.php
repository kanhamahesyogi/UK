<?php
include("../koneksi.php");
$query = "SELECT * FROM tb_pegawai";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../sidebar/style.css">
    <link rel="stylesheet" href="../data/css/pegawai.css">
    <?php include("../sidebar/sidebar.html") ?>
</head>

<body>
    <div class="background">
        <br><br><br>
        <span>Sekarang anda berada di "Data Pegawai"</span>
        <br><br><br>
        <a href="../form/insert/insertpegawai.php"><button class="insert"><strong>INSERT</strong></button></a>
        <div class="luarkotak1">
            <h3>DATA PEGAWAI</h3>
        </div>

        <div class="kotak1">
            <div class="dalamkotak">
                <table>
                    <thead>
                        <tr>
                            <th>ID Pegawai</th>
                            <th>Nama Pegawai</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Level User</th>
                            <th>Username</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <?php
                    $hasil = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_assoc($hasil)) {
                    ?>
                            <td class="maxid"><?php echo $row['idpegawai']; ?></td>
                            <td><?php echo $row['namapegawai']; ?></td>
                            <td class="max"><?= $row['alamat']; ?></td>
                            <td><?= $row['notelp']; ?></td>
                            <td class="maxid"><?= $row['leveluser']; ?></td>
                            <td class="maxid"><?= $row['username']; ?></td>

                            <td><a href="../config/delete/deletepegawai.php?idpegawai=<?php echo $row['idpegawai']; ?>">
                            <button class="tombol-delete"><strong>DELETE</strong></button></a></td>

                            <td><a href="../form/update/updatepegawai.php
                            ?idpegawai=<?= $row['idpegawai']; ?>">
                            <button class="tombol-update"><strong>UPDATE</strong></button></a></td>
                        </tr>
                        </tbody>
                    <?php } ?>
                    
                </table>
            </div>
        </div>
</body>

</html>