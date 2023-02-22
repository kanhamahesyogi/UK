<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/insertspp.css">
    <link rel="stylesheet" href="../sidebar/style.css">
    <?php include "../sidebar/sidebar.html" ?>
</head>
<body>
    <div class="background">
            <br><br><br><br>
            <span>Sekarang anda berada di "Insert Data SPP"</span>
            <div class="luarkotak">
                    <h2>INSERT DATA SPP</h2>
                </div>
                <div class="kotak">
                    <div class="dalamkotak">
                        <form action="../../config/prosesinsert/prosesinsertspp.php" method="post">
                    <table>
                        <tr>
                            <th>Angkatan :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="angkatan" placeholder="..."></td>
                        </tr>
                        <tr>
                            <th>Nominal :</th>
                        </tr>
                        <tr>
                        <td><input type="text" name="nominal" placeholder="..."></td>
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