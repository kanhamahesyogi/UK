<?php
include("../koneksi.php");
$query = "SELECT * FROM tb_siswa inner join tb_spp using(idspp) inner join tb_kelas using(idkelas)";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="../sidebar/style.css">
    <link rel="stylesheet" href="../data/css/datasiswa.css">
    <?php include("../sidebar/sidebar.html") ?>
</head>

<body>
    <div class="background">
        <br><br><br>
        <span>Sekarang anda berada di "Data Siswa"</span>
        <br><br><br>
        <a href="../form/insert/insertsiswa.php"><button class="insert"><strong>INSERT</strong></button></a>
        <div class="luarkotak1">
            <h3>DATA SISWA</h3>
        </div>

        <div class="kotak1">
            <div class="dalamkotak">
                <table>
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Kelas</th>
                            <th>Angkatan</th>
                            <th>Nama Siswa</th>
                            <th>No Telp</th>
                            <th>alamat</th>
                            <th>Jenis Kelamin</th>
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
                            <td class="maxid"><?php echo $row['nis']; ?></td>
                            <td><?php echo $row['jurusan']; ?></td>
                            <td><?php echo $row['angkatan']; ?></td>
                            <td class="max"><?= $row['namasiswa']; ?></td>
                            <td><?= $row['notelp']; ?></td>
                            <td class="maxid"><?= $row['alamat']; ?></td>
                            <td class="maxid"><?= $row['jeniskelamin']; ?></td>
                            <td><a href="../config/delete/deletesiswa.php?nis=<?php echo $row['nis']; ?>">
                            <button class="tombol-delete"><strong>DELETE</strong></button></a></td>

                            <td><a href="../form/update/updatesiswa.php?nis=<?= $row['nis']; ?>">
                            <button class="tombol-update"><strong>UPDATE</strong></button></a></td>
                        </tr>
                        </tbody>
                    <?php } ?>
                    
                </table>
            </div>
        </div>
</body>

</html>