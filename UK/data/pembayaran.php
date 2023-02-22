<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="../data/css/pembayaran.css">
   
    <?php include "..\sidebar\sidebar.html" ?>

</head>

<body>
<?php error_reporting(0); ?>
    <div class="background">
        <div class="input">

            <br><br><br>
            <span>Sekarang anda berada di "Pembayaran"</span>

            <?php
            include("../koneksi.php");
            $nis = $_SESSION['username'];
            $query = "SELECT * FROM tb_siswa WHERE nis='$nis' LIMIT 1";
            if (isset($_POST["cari"])) {
                $keyword = $_POST['keyword'];
                $query = "SELECT * FROM tb_siswa WHERE nis like '%$keyword%' or
                                        namasiswa like '%$keyword%' LIMIT 1";
            }
            ?>
            
            <form action="" method="post">
                <input type="text" name="keyword" placeholder="Ketik NIS..." list="list_nis" autocomplete="off">
                <button type="submit" name="cari" class="cari">Cari</button>
                <datalist id="list_nis">
                    <?php
                    $hasil = mysqli_query($koneksi, "SELECT nis, namasiswa FROM tb_siswa");
                    while ($row = mysqli_fetch_assoc($hasil)) {
                    ?>
                        <option value="<?php echo $row['nis'];?>"></option>
                        <?php
                    }
                    ?>
                 
                </datalist>
            </form>
        </div>
        <br>
        <div class="luarkotak">
            <h2>DATA SISWA</h2>
        </div>
        <div class="kotak">
            <div class="dalamkotak">
                <?php
                $hasil = mysqli_query($koneksi, $query);
                $row = mysqli_fetch_assoc($hasil) 
                ?>
                <table>
                    <tr>
                        <th class="maxid">NIS</th>
                        <td name="nis"><?= $row['nis']; ?></td>
                    </tr>
                    <tr>
                        <th class="maxid">Nama Lengkap</th>
                        <td><?= $row['namasiswa']; ?></td>
                    </tr>
                    <tr>
                        <th class="maxid">Kelas</th>
                        <td><?= $row['idkelas']; ?></td>
                    </tr>
                </table>
                <form action="detailpembayaran.php" method="POST">
                            <?php
                            $hasil_detail = mysqli_query($koneksi,$query);
                            $cek_detail = mysqli_num_rows($hasil_detail);
                            if($cek_detail > 0){
                            ?>
                            <input type="text" hidden name="nis" value="<?= $row['nis']; ?>">
                            <input type="submit" value="Detail" name="pay" class="bayar">
                            <?php
                            }
                            ?>
                        </form>
            </div>
        </div>
            </div>
        </div>
    </div>
</body>
<script>
</script>

</html>