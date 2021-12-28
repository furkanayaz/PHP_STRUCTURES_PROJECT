<?php
$id = $_GET['id'];
include 'config.php';
$sql = "DELETE FROM questions WHERE id=$id";
$sonuc = mysqli_query($baglanti, $sql);
header("Location:sorular.php");
?>