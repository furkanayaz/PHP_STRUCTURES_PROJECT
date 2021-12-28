<?php
include 'config.php';

$id = $_POST['id'];
$soru_basligi = $_POST['soru_basligi'];
$soru_metni = $_POST['soru_metni'];
$kullanici_adi = $_POST['kullanici_adi'];
$kullanici_soyadi = $_POST['kullanici_soyadi'];
$tarih = $_POST['sorunun_olusturuldugu_tarihi'];


$sql = "SELECT * FROM questions;";
mysqli_query($baglanti, $sql);
header("Location:cevapvesoru_goruntuleme.php");
?>