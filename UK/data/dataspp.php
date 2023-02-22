<?php
include("../koneksi.php");
$query = "SELECT * FROM tb_spp";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data SPP</title>
    <link rel="stylesheet" href="../sidebar/style.css">
    <link rel="stylesheet" href="../data/css/css-spp.css">
    <?php include("../sidebar/sidebar.html") ?>
</head>

<body>
    <div class="background">
        <br><br><br>
        <span>Sekarang anda berada di "Data SPP"</span>
        <br><br><br>
        <a href="../form/insert/insertspp.php"><button class="insert"><strong>INSERT</strong></button></a>
        <div class="luarkotak1">
            <h3>DATA SPP</h3>
        </div>

        <div class="kotak1">
            <div class="dalamkotak">
                <table>
                    <thead>
                        <tr>
                            <th>Angkatan</th>
                            <th>Nominal</th>
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
                            <td><?php echo $row['angkatan']; ?></td>
                            <td><?php echo $row['nominal']; ?></td>
                            <td><a href="../config/delete/deletespp.php?angkatan=<?php echo $row['angkatan']; ?>">
                            <button class="tombol-delete"><strong>DELETE</strong></button></a></td>

                            <td><a href="../form/update/updatespp.php?angkatan=<?= $row['angkatan']; ?>">
                            <button class="tombol-update"><strong>UPDATE</strong></button></a></td>
                        </tr>
                        </tbody>
                    <?php } ?>
                    
                </table>
            </div>
        </div>
</body>

</html>