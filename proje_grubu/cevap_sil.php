<?php
include 'config.php';

// GET ile gelen id değerini alıyoruz.
$id = $_GET['id'];
// Silmek için sorgu cümlesini yazıyoruz.
$sql = "DELETE FROM answer WHERE id=$id";

// Sorguyu çalıştırıyoruz
$sonuc = mysqli_query($baglanti, $sql);

// cevaplar.php dosyasına yönlendiriyoruz.
header("Location:cevaplar.php");
?>