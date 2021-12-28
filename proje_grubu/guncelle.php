<?php
include 'config.php';

// Formdan gelen bilgileri alalım
$id = $_POST['id'];
$soru_basligi = $_POST['soru_basligi'];
$soru_metni = $_POST['soru_metni'];
$kullanici_adi = $_POST['kullanici_adi'];
$kullanici_soyadi = $_POST['kullanici_soyadi'];

// Sql sorgusunu hazırlayalım
$sql = "UPDATE questions SET soru_basligi='$soru_basligi', soru_metni='$soru_metni', kullanici_adi='$kullanici_adi', kullanici_soyadi='$kullanici_soyadi' WHERE id=$id;";

// Sorguyu çalıştıralım
mysqli_query($baglanti, $sql);

// Kullanıcıyı yönlendirelim.
header("Location:sorular.php");
?>