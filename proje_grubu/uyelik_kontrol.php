<?php
include "config.php";
?>
<?php 
$kullanici = $_POST['kullanici'];
$sifre= md5($_POST['sifre']);
// echo $kullanici . " " . $sifre . "<br>";
$sql = "SELECT * FROM authentication WHERE email='$kullanici' AND password='$sifre'";

$sonuc= mysqli_query($baglanti, $sql);    
$num_satir = mysqli_num_rows($sonuc);
$satir=mysqli_fetch_assoc($sonuc);   
if($num_satir >= 1){

    echo "Başarıyla giriş yapıldı.";
    $_SESSION['kullanici'] = $satir;
    $_SESSION['kullanici_id']=$satir['id'];
    header("Location: sorular.php");
}else{
    echo "Giriş yapılırken hata meydana geldi.";
}
?>
