<?php

include "../config.php";

$id = $_GET["duzid"];

$veri = mysqli_query($db, "SELECT * FROM posts WHERE post_id = '$id'");
$veri = mysqli_fetch_array($veri);

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Sayfam</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/add-blog-css.css">
    <style>

    </style>
</head>

<body>

    <section id="menu">
        <div id="logo"><i class="fa-solid fa-blog"></i> Blog Sayfam</div>
        <nav>
            <a href="index-admin.php"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
            <a href="blog-admin.php"><i class="fa-solid fa-book ikon"></i></i>Blog Yazıları</a>
            <a href="add-blog-admin.php"><i class="fa-solid fa-file-circle-plus ikon"></i></i>Yazı Ekleme</a>
            <a href="../index.php"><i class="fa-solid fa-arrow-right-from-bracket ikon"></i>Siteye Geri Dön</a>
            <label for="">Admin Girişi Başarılı</label>
        </nav>
    </section>
    <form method="POST">
        <div class="container">
            <h1 id="baslik-blog">Blog Sayfam</h1>

            <div class="form-container">
                <div class="form-group">
                    <label for="konu">Konu</label>
                    <input type="text" class="form-control" id="konu" placeholder="Konu" name="title" value="
                    <?php
                    echo $veri["post_title"];
                    ?>
                    ">
                </div>

                <div class="form-group">
                    <label for="yazi">Blog Yazınızı Giriniz</label>
                    <textarea class="form-control" id="yazi" rows="12" placeholder="Blog Yazınızı Giriniz..."
                        name="content">
                        <?php
                        echo $veri["post_content"];
                        ?>
                        </textarea>
                </div>
            </div>
            <?php

            if (isset($_POST["sendPost"])) {

                $title = ($_POST["title"]);
                $content = ($_POST["content"]);

                if ($title != "" && $content != "") {
                    $ekle = mysqli_query($db, "UPDATE posts SET post_title='$title', post_content='$content' WHERE post_id = '$id'");

                    echo '<div class="alert alert-success">Başarıyla Güncellendi</div>';
                    header("Refresh: 1; url=duzenle-admin.php?duzid=$id");
                } else {
                    echo '<div class="alert alert-danger">Boş Alan Bırakmayınız...</div>';
                }
            }
            ?>
            <button type="submit" class="btn btn-outline-dark button-group" name="sendPost">Düzenle</button>

        </div>
    </form>
    </div>

    <!-- Wrapper Start -->
    <div style="min-height: 100vh; display: flex; flex-direction: column;">

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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/f2e5163e7a.js" crossorigin="anonymous"></script>

</body>

</html>