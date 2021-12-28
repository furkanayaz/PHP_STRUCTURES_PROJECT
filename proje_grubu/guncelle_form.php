<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Güncelle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>

<?php
include 'config.php';

if (!isset($_SESSION['kullanici'])){
    header('Location: sorular.php');
}

// GET ile gelen id değerini alıyoruz.
$id = $_GET['id'];

// Sorgumuzu yazıyoruz.
$sql = "SELECT * FROM questions WHERE questions.id=$id";

// Sorgumuzu çalıştırıyoruz.
$sonuc = mysqli_query($baglanti, $sql);
// Sorgudan dönen satır sayısını değişkene atıyoruz.
$num_satir = mysqli_num_rows($sonuc);

// Eğer satır sayısı 0'dan büyükse, verileri listele.
if ($num_satir > 0) {
    $satir = mysqli_fetch_assoc($sonuc);
    $soru_basligi = $satir['soru_basligi'];
    $soru_metni = $satir['soru_metni'];
    $kullanici_adi = $satir['kullanici_adi'];
    $kullanici_soyadi = $satir['kullanici_soyadi'];
    $tarih = $satir['sorunun_olusturuldugu_tarihi'];
}
?>
<div class="container">
    <div class="d-flex justify-contetn-center">
        <div class="col-6">
            <form action="guncelle.php" method="post">
                    <h3>GÜNCELLE</h3>
                    <div class="form-row">
                        <label>Id</label>
                            <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly="readonly">
                    </div>
                    <div class="form-rwo">
                        <label>Soru Başlığı:</label>
                        <input type="text" class="form-control" name="soru_basligi" value="<?php echo $soru_basligi; ?>">
                    </div>
                    <div class="form-row">
                        <label>Soru Metni:</label>
                        <input type="text" class="form-control" name="soru_metni" value="<?php echo $soru_metni; ?>">
                    </div>
                    <div class="form-row">
                        <label>Kullanıcı Adı:</label>
                        <input type="text" class="form-control" name="kullanici_adi" value="<?php echo $kullanici_adi; ?>">
                    </div>
                    <div class="form-row">
                        <label>Kullanıcı Soyadı:</label>
                            <input type="text" class="form-control" name="kullanici_soyadi" value="<?php echo $kullanici_soyadi; ?>">
                    </div>
                    <div class="form-row">
                        <th>Eklenme Tarihi:</th>
                        <td><input type="text" class="form-control" name="sorunun_olusturuldugu_tarihi" value="<?php echo $tarih; ?>"
                                   readonly="readonly"></td>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-success">Güncelle</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>