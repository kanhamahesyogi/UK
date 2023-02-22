<?php
include("../koneksi.php");
$query = "SELECT * FROM tb_kelas";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <link rel="stylesheet" href="../sidebar/style.css">
    <link rel="stylesheet" href="../data/css/css-kelas.css">
    <?php include("../sidebar/sidebar.html") ?>
</head>

<body>
    <div class="background">
        <br><br><br>
        <span>Sekarang anda berada di "Data Kelas"</span>
        <br><br><br>
        <a href="../form/insert/insertkelas.php"><button class="insert"><strong>INSERT</strong></button></a>
        <div class="luarkotak1">
            <h3>DATA KELAS</h3>
        </div>

        <div class="kotak1">
            <div class="dalamkotak">
                <table>
                    <thead>
                        <tr>
                            <th>ID Kelas</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
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
                            <td class="maxid"><?php echo $row['idkelas']; ?></td>
                            <td><?php echo $row['kelas']; ?></td>
                            <td ><?= $row['jurusan']; ?></td>
                            <td><a href="../config/delete/deletekelas.php?idkelas=<?php echo $row['idkelas']; ?>">
                            <button class="tombol-delete"><strong>DELETE</strong></button></a></td>

                            <td><a href="../form/update/updatekelas.php?idkelas=<?= $row['idkelas']; ?>">
                            <button class="tombol-update"><strong>UPDATE</strong></button></a></td>
                        </tr>
                        </tbody>
                    <?php } ?>
                    
                </table>
            </div>
        </div>
</body>

</html>