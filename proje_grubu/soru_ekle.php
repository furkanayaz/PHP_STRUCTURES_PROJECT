 <?php
include 'config.php';

// POST ile gelen verileri değişkenlere atadık
$soru_basligi = $_POST['soru_basligi'];
$soru_metni = $_POST['soru_metni'];
$kullanici_adi = $_POST['kullanici_adi'];
$kullanici_soyadi = $_POST['kullanici_soyadi'];
$category_id = $_POST['kategori'];

// Sorgumuzu oluşturuyoruz
$sql = "INSERT INTO questions (soru_basligi,soru_metni,kullanici_adi,kullanici_soyadi, category_id) VALUES ('$soru_basligi','$soru_metni','$kullanici_adi','$kullanici_soyadi', '$category_id')";

// Sorgumuzu MySQL'e yolluyoruz
mysqli_query($baglanti, $sql);
// Eklenen son sorunun id sini alıyoruz
$last_id = mysqli_insert_id($baglanti);

// id değeri varsa soru ekleme işlemi başarılı
if ($last_id > 0) {
    echo "Soru Eklendi";
    header("Location:sorular.php");
} else {
    echo "HATA" . $sql . "<br>" . mysqli_error($baglanti);
}
?>