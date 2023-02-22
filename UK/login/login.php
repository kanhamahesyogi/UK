<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <div class="background">
        <div class="kotak">
            <div class="username">
                <span>LOGIN</span>
            </div>

            <div class="img">
                <img src="../foto/logo-smk.png" alt="" srcset="" style="height:150px;">
            </div>
            <form action="../login/sistimlogin.php" method="post">
            <input type="username" placeholder="USERNAME / NIS...." class="active" name="username"></input>
            <input type="password" placeholder="PASSWORD...." class="active" name="password"></input>
            <button type="submit">MASUK</button>
            </form>
        </div>
    </div>
</body>
<script>
    var button = document.querySelector("input");

    button.addEventListener("click", function(e) {
        this.classList.toggle("active");
    });
</script>

</html>