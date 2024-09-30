<?php

include "../config.php";


?>



<div class="container">
    <?php
    if (isset($_GET["silid"])) {
        $sil = mysqli_query($db, "DELETE FROM posts where post_id = '" . $_GET["silid"] . "' ");
        echo '<div class="alert alert-success">Başarıyla Silindi...</div>';
        header("Refresh: 1; url=add-blog.php");
    }
    ?>

    <h1 id="baslik-blog">İçerikler</h1>

    <?php
    $veri = mysqli_query($db, "SELECT * FROM posts ORDER BY post_id DESC");

    while ($content = $veri->fetch_array()) {
    ?>
        <br>
        <div class="button-group" style="border: 2px solid #ccc;">
            <?php echo substr($content["post_title"], 0, 75), "..."; ?>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-outline-dark">
                    <a href="?silid=<?php echo $content['post_id']; ?>" onclick="return confirmDelete();" style="color: grey;">Sil</a>
                </button>
                <button type="button" class="btn btn-outline-dark">
                    <a href="duzenle.php?duzid=<?php echo $content['post_id']; ?>" style="color: grey;">Düzenle</a>
                </button>
            </div>
        </div>
    <?php
    }
    ?>

    <script>
      function confirmDelete() {
        return confirm("Bu öğeyi silmek istediğinize emin misiniz?");
      }
    </script>
</div>
