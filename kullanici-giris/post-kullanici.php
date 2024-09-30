<?php

include "../config.php";

if (isset($_GET["postid"])) {
    $icerik = mysqli_query($db, "select * from posts where post_id = '" . $_GET["postid"] . "'");

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
    <link rel="stylesheet" href="../css/style.css">
    <!-- Font Awesome icons (free version)-->
    <script src="https://kit.fontawesome.com/f2e5163e7a.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    <section id="menu">
        <div id="logo"><i class="fa-solid fa-blog"></i> Blog Sayfam</div>
        <nav>
            <a href="index-kullanici.php"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
            <a href="blog-kullanici.php"><i class="fa-solid fa-book ikon"></i></i>Blog Yazıları</a>
            <a href="add-blog-kullanici.php"><i class="fa-solid fa-file-circle-plus ikon"></i></i>Yazı Ekleme</a>
            <a href="../index.php"><i class="fa-solid fa-arrow-right-from-bracket ikon"></i>Çıkış</a>
            <label for="">Hoşgeldiniz...</label>
        </nav>
    </section>
    <!-- Page Header-->
    <header class="masthead"
        style="background-image: url('../img/iletisim.jpg'); height:500px;  background-size: cover; background-repeat: no-repeat; background-position: center;">
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

    <!-- Wrapper Start -->
    <div style="min-height: auto; display: flex; flex-direction: column;">

        <!-- Diğer sayfa içeriğiniz burada yer alacak -->

        <!-- Footer Section Start -->
        <footer style="background-color: #333; color: #fff; padding: 20px 0; text-align: center; margin-top: auto;">
            <p>&copy; 2024 Blog Sayfam | Tüm Hakları Saklıdır.</p>
            <div>
                <a href="https://www.facebook.com/" target="_blank" style="color: #fff; margin-right: 15px;"><i
                        class="fa-brands fa-facebook"></i> Facebook</a>
                <a href="https://www.twitter.com/" target="_blank" style="color: #fff; margin-right: 15px;"><i
                        class="fa-brands fa-twitter"></i> Twitter</a>
                <a href="https://www.instagram.com/" target="_blank" style="color: #fff;"><i
                        class="fa-brands fa-instagram"></i> Instagram</a>
            </div>
        </footer>
        <!-- Footer Section End -->

    </div>
    <!-- Wrapper End -->


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
</body>

</html>