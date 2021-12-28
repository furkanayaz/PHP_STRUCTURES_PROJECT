<?php
include 'config.php';

// Kategori Ekleme !iptal
$cevap_metni = $_POST['cevap_metni'];
$kullanici_adic = $_POST['kullanici_adic'];
$kullanici_soyadic = $_POST['kullanici_soyadic'];

$sql = "INSERT INTO answer (cevap_metni,kullanici_adi,kullanici_soyadi) VALUES ('$cevap_metni','$kullanici_adic','$kullanici_soyadic')";
mysqli_query($baglanti, $sql);
$last_id = mysqli_insert_id($baglanti);
if ($last_id > 0) {
    echo "Cevap Eklendi";
    header("Location:cevaplar.php");
} else {
    echo "HATA" . $sql . "<br>" . mysqli_error($baglanti);
}
?>