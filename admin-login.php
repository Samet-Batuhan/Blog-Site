<?php

include "config.php";


if(isset($_POST["loginPost"])){

    $kadi = $_POST["kadi"];
    $pass = $_POST["pass"];

    $result = mysqli_query($db, "SELECT * FROM users WHERE user_name='$kadi'");
    $user = mysqli_fetch_array($result);

    if ($user) {
        $username = $user["user_name"];
        $password = $user["password"];

        if($kadi == $username && $pass == $password){
            echo "<div class='alert alert-success'>Başarılı Giriş, Yönlendiriliyorsunuz...</div>";
            header("Refresh: 2; url=admin-giris/index-admin.php.");

        } else {
            echo "Hatalı Kullanıcı Adı veya Şifre";
        }
    } else {
        echo "Kullanıcı bulunamadı.";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;1,300&display=swap" rel="stylesheet">

</head>

<body>

    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Admin Giriş</h1>
            </div>
            <form method="post">
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" name="kadi" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                        <label class="login-field-icon" for="login-name"></label>
                    </div>
                    <div class="control-group">
                        <input type="password" name="pass" class="login-field" id="login-pass" placeholder="Şifre">
                        <label class="login-field-icon" for="login-pass"></label>
                    </div>
                    <button name="loginPost" class="btn btn-primary btn-large btn-block">Giriş Yap</button>
                </div>
            </form>
            <a href="index.php"><button class="btn btn-primary btn-large btn-block">Anasayfa</button></a>
        </div>
    </div>

</body>

</html>