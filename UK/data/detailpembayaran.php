<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="../data/css/detailpembayaran.css">
    <?php include "..\sidebar\sidebar.html" ?>

</head>

<body>
    <?php  ?>
    <div class="background">
        <div class="input">

            <br><br><br>
            <span>Sekarang anda berada di "Pembayaran"</span>

            <?php
            include("../koneksi.php");
            // $nis = $_SESSION['username'];
            $nis2 = $_GET['nis2'];
            $nis = $_POST['nis'];
            $_SESSION['nis'] = $nis;
            $nis_baru = $_SESSION['nis'];
            $query = "SELECT * FROM tb_siswa WHERE nis='$nis'";
            $keyword = $_POST['keyword'];
            if (isset($_POST["keyword"])) {
                $query = "SELECT * FROM tb_siswa WHERE nis like '%$keyword%' or
                                                    namasiswa like '%$keyword%'";
            }elseif($nis2){
                $query = "SELECT * FROM tb_siswa WHERE nis=$nis2";
            }
            ?>


            <form action="" method="post">
                <input type="text" name="keyword" placeholder="Ketik NIS..." list="list_nis" autocomplete="off">
                <button type="submit" name="cari" class="cari">Cari</button>
                <datalist id="list_nis">
                    <?php
                    $hasil = mysqli_query($koneksi, "SELECT nis FROM tb_siswa ");
                    while ($row = mysqli_fetch_assoc($hasil)) {
                    ?>
                        <option value="<?php echo $row['nis']; ?>"></option>
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
                        $row = mysqli_fetch_assoc($hasil);
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
            </div>
        </div>
        <br>
        <div class="luarkotak1">
            <h2>DATA SPP SISWA</h2>
        </div>
        <div class="kotak1">
            <div class="dalamkotak1">
                <?php
                        $hasil = mysqli_query($koneksi, $query);
                        $row = mysqli_fetch_assoc($hasil)
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Tahun</th>
                            <th>Bulan</th>
                            <th>Jatuh Tempo</th>
                            <th>Tanggal Bayar</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                            <th>Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $nis_global = $row ['nis'];
                    ?>
                                <form action="../data/pembayaran.php" method="GET">

                                
                                    <?php
                                    
                                    

                                    $awaltempo = date("13-0-d");
                                    $bulanIndo =[
                                            '01' => 'Januari',
                                            '02' => 'Februari',
                                            '03' => 'Maret',
                                            '04' => 'April',
                                            '05' => 'Mei',
                                            '06' => 'Juni',
                                            '07' => 'Juli',
                                            '08' => 'Agustus',
                                            '09' => 'September',
                                            '10' => 'Oktober',
                                            '11' => 'November',
                                            '12' => 'Desember',
                                    ];
                                    $tahunIndo =[
                                        '13' => '2023',
                                        '14' => '2024',
                                        '15' => '2025',
                                        '16' => '2026',
                                        '17' => '2027',
                                        '18' => '2028',
                                        '19' => '2029',
                                        '20' => '2030',
                                        '21' => '2031',
                                ];
                                    for ($i=1;$i<37;$i++){
                                        $jatuhtempo = date("Y-m-d" , strtotime("+$i month" , strtotime($awaltempo)));
                                        
                                        $bulan = $bulanIndo[date('m' ,strtotime($jatuhtempo))];
                                        $tahun = $tahunIndo[date('y' ,strtotime($jatuhtempo))];
                                        $hasil_bulan = mysqli_query($koneksi,"SELECT * FROM tb_pembayaran WHERE bulan='$bulan' AND nis='$nis_global' AND tahun='$tahun' ");
                                        $row_bulan = mysqli_fetch_assoc($hasil_bulan);
                                        ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$tahun?></td>
                                            <td><?=$bulan?></td>
                                            <td>10-<?=$bulanIndo[date('m', strtotime("+$i month" , strtotime($awaltempo)))];?></td>
                                            <td><?= $row_bulan['tanggalbayar']?></td>
                                            <td><?= $row_bulan['jumlah']?></td>
                                            <td><strong><?= $row_bulan['keterangan']?></strong></td>
                                            <td>
                                                <?php
                                                    $cek_bulan = mysqli_num_rows($hasil_bulan);
                                                    if(!$cek_bulan > 0){
                                                ?>
                                                <a class="bayar" href="../form/insert/insertpembayaran.php?bulan=<?=$bulan?> &nis=<?=$row['nis']?> &tahun=<?=$tahun?>">BAYAR</a>
                                                <input type="text" hidden name="bulan" value="<?=$bulan?>">
                                                <input type="text" hidden name="nis" value="<?=$row ['nis']; ?>">                                        
                                                <?php
                                                    } else {
                                                        ?>
                                                        <!-- <input class="btn-bayar-batal" type="submit" value="BATALKAN"> -->
                                                        <a class="bayar" href="../config/delete/deletepembayaran.php?idpembayaran=<?= $row_bulan['idpembayaran']?>" onclick="return confirm('Anda yakin mau membatalkan transaksi ini?')">BATALKAN</a>
                                                        <?php
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php             
                                    }
                                    ?>
                                    
                                </form>
                    </tbody>
                </table>
            </div>
        </div>
  
<?php
                    
?>
    </div>
    </div>
    </div>
</body>
<script>

onload=function(){
    var e=document.getElementById("refreshed");
    if(e.value=="no")e.value="yes";
    else{e.value="no";location.reload();}
}

</script>
</script>

</html>