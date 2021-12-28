<?php
    session_start();
    // Kullanıcı oturumu kontrolü
    if(!isset($_SESSION['kullanici'])){
        header("Location: kullanici_giris_sayfasi.php");
    }
?>