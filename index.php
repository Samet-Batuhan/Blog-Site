<?php

include "config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f2e5163e7a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">

    <title>Anasayfa</title>
</head>

<body>

    <section id="menu">
        <div id="logo"><i class="fa-solid fa-blog"></i> Blog Sayfam</div>
        <nav>
            <a href="index.php"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
            <a href="blog.php"><i class="fa-solid fa-book ikon"></i>Blog Yazıları</a>
            <a href="add-blog.php"><i class="fa-solid fa-file-circle-plus ikon"></i>Yazı Ekleme</a>
            <a href="admin-login.php"><i class="fa-solid fa-user-tie ikon"></i>Yönetici Paneli</a>
            <a href="giris.php"><i class="fa-solid fa-right-to-bracket ikon"></i>Giriş Yap</a>
            <a href="kayit.php"><i class="fa-solid fa-user-plus ikon"></i>Kayıt Ol</a>
        </nav>
    </section>

    <section id="anasayfa">
        <div id="black"></div>
        <div id="icerik">
            <h2>Blog Sayfam</h2>
            <hr width="300px" align="left">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut tempora reiciendis vel id consequatur dolor
                reprehenderit fuga sapiente, esse voluptatum perferendis. Aspernatur accusantium repellat distinctio
                nisi ipsam in eaque deleniti?</p>
        </div>
    </section>

    <section id="blog-yazi">
        <div class="container">
            <h3 style="font-size: 35px;">Blog Yazılarım</h3>

            <div class="owl-carousel owl-theme">

                <?php

                $content = mysqli_query($db, "SELECT * FROM posts ORDER BY post_id DESC limit 0,3");

                while ($icerik = $content->fetch_array()) {
                    $title = $icerik["post_title"];
                    ?>

                    <div class="card item" data-merge="1.6">
                        <img src="img/cocuklar-585x439.jpg" class="img-fluid">
                        <h5 class="baslikcard"><?php echo $title ?></h5>
                        <button type="button" class="btn buton">
                            <a href="post.php?postid=<?php echo $icerik["post_id"]; ?>" class="btn-index">
                                Detaylar
                            </a>
                        </button>
                    </div>

                    <?php
                }
                ?>

            </div>

        </div>

    </section>

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

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    <script src="owl/owl.carousel.min.js"></script>

    <script src="owl/script.js"></script>

</body>

</html> 