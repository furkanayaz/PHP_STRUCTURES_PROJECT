<?php
if (PHP_SESSION_DISABLED == session_status()) {
    session_start();
}
if (PHP_SESSION_NONE == session_status()) {
    session_start();
}
/*
 * Veritabanı bağlantısı yapabilmek için gereken bilgiler.
 */

// Bağlanacağımız sunucu ip adresi
$sunucu_adi = "localhost";

// Veritabanı sunucusuna bağlanırken kullanılacak olan kullanıcı adı
$kullanici_adi = "root";

// Veritabanı sunucusuna bağlanırken kullanılacak olan parola
$sifre_veritabani = "";

$veritabani_adi = "odev";

// Bağlantı kurulup kurulmadığını kontrol eder.
$baglanti = mysqli_connect($sunucu_adi, $kullanici_adi, $sifre_veritabani, $veritabani_adi);
if ( !$baglanti ) {
    die("Bağlantı kurulamadı: " . mysqli_connect_error());
}
mysqli_query($baglanti, "set names 'utf8'");
?>