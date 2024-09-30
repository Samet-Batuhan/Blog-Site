<?php

include "config.php";

if (isset($_GET["postid"])) {
    $icerik = mysqli_query($db, "SELECT * FROM posts WHERE post_id = '" . $_GET["postid"] . "'");

    $icerik = mysqli_fetch_array($icerik);

    $title = $icerik["post_title"];
    $content = $icerik["post_content"];
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bloglarım</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome icons (free version)-->
    <script src="https://kit.fontawesome.com/f2e5163e7a.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="deneme.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    <section id="menu">
        <div id="logo"><i class="fa-solid fa-blog"></i> Blog Sayfam</div>
        <nav>
            <a href="index.php"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
            <a href="blog.php"><i class="fa-solid fa-book ikon"></i></i>Blog Yazıları</a>
            <a href="add-blog.php"><i class="fa-solid fa-file-circle-plus ikon"></i></i>Yazı Ekleme</a>
            <a href="admin-login.php"><i class="fa-solid fa-user-tie ikon"></i></i></i>Yönetici Paneli</a>
            <a href="giris.php"><i class="fa-solid fa-right-to-bracket ikon"></i>Giriş Yap</a>
            <a href="kayit.php"><i class="fa-solid fa-user-plus ikon"></i>Kayıt Ol</a>
        </nav>
    </section>
    <!-- Page Header-->
    <header class="masthead"
        style="background-image: url('img/iletisim.jpg'); height:500px; background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading" style="color: white;">
                        <h1><?php echo $title; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-11" style="font-size: 25px">
                    <p><?php echo $content; ?></p>
                </div>
            </div>
        </div>
    </article>

    <?php
// MySQLi Bağlantısı
$db = new mysqli('localhost:3308', 'root', '', 'blog');

if ($db->connect_error) {
    die("Bağlantı hatası: " . $db->connect_error);
}


// Bağlantıyı kapatma
$db->close();
?>

    <!-- Footer Section Start -->
    <footer style="background-color: #333; color: #fff; padding: 20px 0; text-align: center;">
        <div class="container">
            <p>&copy; 2024 Blog Sayfam | Tüm Hakları Saklıdır.</p>
            <div>
                <a href="https://www.facebook.com/" target="_blank" style="color: #fff; margin-right: 15px;"><i
                        class="fa-brands fa-facebook"></i> Facebook</a>
                <a href="https://www.twitter.com/" target="_blank" style="color: #fff; margin-right: 15px;"><i
                        class="fa-brands fa-twitter"></i> Twitter</a>
                <a href="https://www.instagram.com/" target="_blank" style="color: #fff;"><i
                        class="fa-brands fa-instagram"></i> Instagram</a>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>