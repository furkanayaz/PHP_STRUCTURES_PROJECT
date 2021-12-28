<?php

include 'config.php';

// Kullanıcı soruya cevap eklemek istediği zaman bu sayfaya girer.
// Ardından cevap bilgileri alınır.
$cevap_metni = $_POST['cevap_metni'];
$kullanici_adic = $_POST['kullanici_adic'];
$kullanici_soyadic = $_POST['kullanici_soyadic'];
$soru_id = $_POST['soru_id'];

// ve bu kısımda veritabanına eklenir.
$sql = "INSERT INTO answer (cevap_metni,kullanici_adi,kullanici_soyadi, question_id) VALUES ('$cevap_metni','$kullanici_adic','$kullanici_soyadic', '$soru_id')";
mysqli_query($baglanti, $sql);

$last_id = mysqli_insert_id($baglanti);

if ($last_id > 0) {
    echo "Cevap Eklendi";
    header("Location:cevaplar.php?id=" . $soru_id);
} else {
    echo "HATA" . $sql . "<br>" . mysqli_error($baglanti);
}