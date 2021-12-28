<?php
include 'config.php';
$id = $_GET['id'];
$cevap_metni = $_GET['cevap_metni'];
$post_id = $_GET['post_id'];

$sql = "UPDATE `answer` SET  `cevap_metni` = '$cevap_metni' WHERE `answer`.`id` = $id;";
mysqli_query($baglanti, $sql);
header("Location:cevaplar.php?id=$post_id");
?>