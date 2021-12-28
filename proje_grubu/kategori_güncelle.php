<?php 
include 'config.php';
$kategori_id=$_POST['kategori_id'];
$kategori_adi=$_POST['kategori_adi'];
$kategori_aciklama=$_POST['kategori_aciklama'];


$sql="UPDATE `kategoriler` SET `kategori_id` = '$kategori_id', `kategori_adi` = '$kategori_adi', `kategori_aciklama` = '$kategori_aciklama' WHERE `kategoriler`.`kategori_id` = $kategori_id;";
mysqli_query($baglanti,$sql);
header("Location:cevaplar.php");
?>