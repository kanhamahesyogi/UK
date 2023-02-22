<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/insertkelas.css">
    <link rel="stylesheet" href="../sidebar/style.css">
    <?php include "../sidebar/sidebar.html" ?>
</head>
<body>
    <div class="background">
            <br><br><br><br>
            <span>Sekarang anda berada di "Insert Data Kelas"</span>
            <div class="luarkotak">
                    <h2>INSERT DATA KELAS</h2>
                </div>
                <div class="kotak">
                    <div class="dalamkotak">
                        <form action="../../config/prosesinsert/prosesinsertkelas.php" method="post">
                    <table>
                        <tr>
                            <th>ID Kelas :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="idkelas" disabled placeholder="auto"></td>
                        </tr>
                        <tr>
                            <th>Kelas :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="kelas"></td>
                        </tr>
                        <tr>
                            <th>Jurusan :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="jurusan"></td>
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