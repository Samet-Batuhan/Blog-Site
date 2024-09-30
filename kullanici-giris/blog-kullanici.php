<?php

include "../config.php";

// Geçerli sayfa numarasını sorgu parametresinden alıyoruz, eğer yoksa 1. sayfayı varsayıyoruz
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$limit = 8; // Sayfa başına gönderi sayısı
$offset = ($page - 1) * $limit; // Gönderilerin nereden başlayacağını hesaplıyoruz

// Toplam gönderi sayısını almak için sorgu
$total_posts_query = mysqli_query($db, "SELECT COUNT(*) as total FROM posts");
$total_posts = mysqli_fetch_assoc($total_posts_query)['total']; // Toplam gönderi sayısını alıyoruz
$total_pages = ceil($total_posts / $limit); // Toplam sayfa sayısını hesaplıyoruz

// Geçerli sayfaya ait gönderileri almak için sorgu
$content = mysqli_query($db, "SELECT * FROM posts LIMIT $offset, $limit");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f2e5163e7a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/blog-css.css">
    <title>Document</title>
</head>

<body>

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
    <div class="mt-5">

        <div class="row kart">
            <?php

            // Veritabanından alınan her gönderiyi ekrana bastırıyoruz
            while ($icerik = $content->fetch_array()) {

                $title = $icerik["post_title"];
                ?>
                <div class="card col-md-3">
                    <img class="card-img-top img-fluid" src="../img/cocuklar-585x439.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title ?></h5>
                        <p class="card-text"><?php echo substr($icerik["post_content"], 0, 148), "..."; ?></p>
                        <a href="post-kullanici.php?postid=<?php echo $icerik["post_id"]; ?>" class="btn btn-outline-dark">
                            Detaylar
                        </a>
                    </div>
                </div>
                <?php
            }

            ?>
        </div>
    </div>


    <!-- Sayfalama düğmeleri -->
    <div class="pagination  d-flex justify-content-center" style="margin-bottom: 50px">
        <?php if ($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>" class="btn btn-outline-dark">Geri</a>
        <?php endif; ?>

        <?php if ($page < $total_pages): ?>
            <a href="?page=<?php echo $page + 1; ?>" class="btn btn-outline-dark">İleri</a>
        <?php endif; ?>
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

    <script src="js/script.js"></script>

</body>

</html>