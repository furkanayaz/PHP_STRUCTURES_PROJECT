<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Güncelle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<?php
include 'config.php';

// GET ile gelen $id değerini alıyoruz.
$id = $_GET['id'];

// Veritabanından bu id'ye ait kayıtları çekiyoruz.
$sql = "SELECT * FROM questions WHERE id=".$id;

// Sorgumuzu MySQL'e sokuyoruz
$sonuc = mysqli_query($baglanti, $sql);

// Eğer sorguda herhangi bir kayıt yoksa , kullanıcıyı bilgilendiriyoruz.
// Eğer sorguda bir kayıt varsa, gelen $sonuc değişkenine atayıp kullanıyoruz.
if (mysqli_num_rows($sonuc) === 0) {
    echo "Soru Bulunamadı";exit;
}else{
    $soru = mysqli_fetch_assoc($sonuc);
}
?>
<div class="container">
    <div class="d-flex flex-column">
        <div class="col-12">
            <h3>SORU:</h3>

            <table class="table table-hover">
                <tr>
                    <th>Id:</th>
                    <th>Soru Başlığı:</th>
                    <th>Soru Metni:</th>
                    <th>Kullanıcı Adı:</th>
                    <th>Kullanıcı Soyadı:</th>
                    <th>Eklenme Tarihi:</th>
                </tr>
                <tr>
                    <!-- Sonuçları yazdırıyoruz -->
                    <td><?=$soru['id']?></td>
                    <td><?= $soru['soru_basligi']; ?></td>
                    <td><?= $soru['soru_metni']; ?></td>
                    <td><?= $soru['kullanici_adi']; ?></td>
                    <td><?= $soru['kullanici_soyadi']; ?></td>
                    <td><?= $soru['sorunun_olusturuldugu_tarihi']; ?></td>
                </tr>
            </table>
        </div>
    </div>


</div>

</body>
</html>