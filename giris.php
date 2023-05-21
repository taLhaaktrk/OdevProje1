<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="stylegiris.css">
    <link rel="icon" href="LogoYuvarlak.png" />

</head>

<body>
    <div id="tablo">
        <form method="POST" action="">
            <div id="menü">
                <div id="baslık">
                    <h1>GİRİŞ SAYFASI</h1>
                </div>
                <div id="formlar">
                    <input type="text " name="username" placeholder="Kullanıcı Adı"><br>
                    <input type="password" name="password" placeholder="Şifre"> <br>
                    <button type="submit">GİRİŞ</button>

                </div>
            </div>

        </form>
    </div>


</body>

</html>
<?php


$user = 'g221210085@sakarya.edu.tr';
$pass = 'g221210085';

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $user &&  $password == $pass) {
        echo "Hoşgeldiniz G221210085";
    } else {
        header("location: yanlıs.php ");
    }
}


?>