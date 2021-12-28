<?php
include 'config.php';
$id = $_POST['id'];
$cevap_metni = $_POST['cevap_metni'];
$kullanici_adic = $_POST['kullanici_adic'];
$kullanici_soyadic = $_POST['kullanici_soyadic'];
$cevap_tarihi = $_POST['cevap_tarihi'];


$sql = "SELECT* FROM answer;";
mysqli_query($baglanti, $sql);
header("Location:cevapvesoru_goruntuleme.php");
?>