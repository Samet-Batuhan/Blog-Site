<?php

include "../config.php";

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
                    <input type="text" class="form-control" id="konu" placeholder="Konu" name="title"
                        value="<?php echo isset($_POST['title']) ? $_POST['title'] : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="yazi">Blog Yazınızı Giriniz</label>
                    <textarea class="form-control" id="yazi" rows="12" placeholder="Blog Yazınızı Giriniz..."
                        name="content"><?php echo isset($_POST['content']) ? $_POST['content'] : ''; ?></textarea>
                </div>
            </div>
            <?php

            if (isset($_POST["sendPost"])) {

                $title = ($_POST["title"]);
                $content = ($_POST["content"]);
                if ($title != "" && $content != "") {
                    $ekle = mysqli_query($db, "INSERT INTO posts(post_title, post_content) VALUES('$title','$content')");

                    echo '<div class="alert alert-success">Başarıyla Eklendi</div>';
                    header("Refresh: 1; url=add-blog-admin.php");
                } else {
                    echo '<div class="alert alert-danger">Boş Alan Bırakmayınız...</div>';
                }
            }
            ?>
            <button type="submit" class="btn btn-outline-dark button-group" name="sendPost">Yükle</button>

        </div>
    </form>

    <div class="container">
        <?php
        if (isset($_GET["silid"])) {
            $sil = mysqli_query($db, "DELETE FROM posts where post_id = '" . $_GET["silid"] . "' ");
            echo '<div class="alert alert-success">Başarıyla Silindi...</div>';
            header("Refresh: 1; url=add-blog-admin.php");

        }
        ?>
        <h1 id="baslik-blog">İçerikler</h1>

        <?php

        $veri = mysqli_query($db, "SELECT * FROM posts ORDER BY post_id DESC");

        while ($content = $veri->fetch_array()) {
            ?>
            <br>
            <div class="button-group " style=" border: 2px solid #ccc; margin-bottom: 50px;">
                <?php echo substr($content["post_title"], 0, 75), "..."; ?>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-dark ">
                        <a href="?silid=<?php echo $content["post_id"]; ?>" onclick="return confirmDelete();" style=";">
                            Sil</a></button>
                    <button type="button" class="btn btn-outline-dark">
                        <a href="duzenle-admin.php?duzid= <?php echo $content["post_id"]; ?>">Düzenle</a></button>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
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

    <script>
        function confirmDelete() {
            return confirm("Bu öğeyi silmek istediğinize emin misiniz?");
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/f2e5163e7a.js" crossorigin="anonymous"></script>

</body>

</html>