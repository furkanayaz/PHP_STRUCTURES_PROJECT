<?php
include "config.php";
    // ihtiyacımız olan dosyaları çağırıyoruz.
    if (!isset($_SESSION['kullanici']) && empty($_SESSION['kullanici'])){
        header("Location:anasayfa.php");
    }else{

        // GET ile gelen değeri değişkene atıyoruz.
        $soru_id = $_GET['soru_id'];

        // Giriş yapan kullanıcının bilgilerini çekiyoruz.
        $kullanici_id = isset($_SESSION['kullanici_id']) ? $_SESSION['kullanici_id'] : $_SESSION['kullanici']['id'];


        // Soru bilgilerini çekiyoruz.
        // Eğer kullanıcı, soruyu beğenirse if bloğu içerisinde "liked" değerini 1 arttırıyoruz.
        if ($_GET['begenme_durum'] == 1){
            mysqli_query($baglanti, "UPDATE questions SET liked = liked + 1 WHERE id = $soru_id");
            $result = mysqli_query($baglanti, "INSERT INTO like_table (kullanici_id, soru_id, begenme_id) VALUES ($kullanici_id, $soru_id, 1)");

            // Eğer kullanıcı, soruyu beğenmezse else bloğu içerisinde "dislike" değerini 1 arttırıyoruz.
        }else{
            mysqli_query($baglanti, "UPDATE questions SET dislike = dislike + 1 WHERE id = $soru_id");
            $result = mysqli_query($baglanti, "INSERT INTO like_table (kullanici_id, soru_id, begenme_id) VALUES ($kullanici_id, $soru_id, 0)");

        }
    }

    // en son olarak sorular.php dosyasına yönlendiriyoruz.
header('Location: sorular.php');
?>