<?php

require 'baglan.php'

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
                <h1>Giriş Yap</h1>
            </div>
            <form action="islem.php" method="post">
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı"
                            id="login-name">
                        <label class="login-field-icon" for="login-name"></label>
                    </div>
                    <div class="control-group">
                        <input type="password" name="password" class="login-field" id="login-pass" placeholder="Şifre">
                        <label class="login-field-icon" for="login-pass"></label>
                    </div>
                    <button href="giris.php" name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap</button>
                </div>
            </form>
            <a href="kayit.php"><button class="btn btn-primary btn-large btn-block">Kayıt Ol</button></a>
            <a href="index.php"><button class="btn btn-primary btn-large btn-block">Anasayfa</button></a>
        </div>
    </div>

</body>

</html>