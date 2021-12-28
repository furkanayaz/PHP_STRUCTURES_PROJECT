<?php
$id=$_GET['id'];
include 'config.php';
$sql="DELETE FROM kategoriler WHERE id=$id";
$sonuc=mysqli_query($baglanti,$sql);
header("Location:kategoriler.php");
?> 
