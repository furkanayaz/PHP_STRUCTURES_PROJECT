<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Güncelle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<?php
include 'config.php';

    if (!isset($_SESSION['kullanici'])){
        echo '<script>alert("Giriş yapınız!");</script>';
        echo '<script>window.location="anasayfa.php.php";</script>';
    }
    $viewCounter = 0;
    $id = $_GET['id'];
    // Soruyu gelen id ye göre çekiyoruz.
    $sql = "SELECT * FROM questions WHERE questions.id=$id";

    // Soruyu çekiyoruz.
    $sonuc = mysqli_query($baglanti,$sql);

    $num_satir = mysqli_num_rows($sonuc);

    // Soruyu çekip değişkenlere değerleri dolduruluyor.
    if ($num_satir > 0){
        $satir = mysqli_fetch_assoc($sonuc);
        $soru_basligi = $satir['soru_basligi'];
        $soru_metni = $satir['soru_metni'];
        $kullanici_adi = $satir['kullanici_adi'];
        $kullanici_soyadi = $satir['kullanici_soyadi'];
        $tarih = $satir['sorunun_olusturuldugu_tarihi'];
    }

    // Görüntülenen sorunun sayacını arttırır.
    if (!empty($id) ){
        if (is_numeric($id) ){
            $result = mysqli_query($baglanti,"select * from views where question_id=$id");
            if (mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $view = $row['counter'];
                $view++;
                $viewCounter = $view;
                $sql = "UPDATE views SET counter = $view WHERE question_id = $id";
                mysqli_query($baglanti,$sql);
            }else {
                $sql = "INSERT INTO views (question_id,counter) VALUES ($id,1)";
                $viewCounter = 1;
                mysqli_query($baglanti,$sql);
            }
        }
    }
    ?>
    <div class="container">
        <form action="soru_gosterme.php" method="post">
            <div class="d-flex flex-row justify-content-between">
                <h4>Soru:</h4>
                <h4>Görüntülenme : <?= $viewCounter?></h4>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>Id: </th>
                    <th>Soru Başlığı: </th>
                    <th>Soru Metni: </th>
                    <th>Kullanıcı Adı: </th>
                    <th>Kullanıcı Soyadı: </th>
                    <th>Eklenme Tarihi: </th>
                </tr>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $soru_basligi; ?></td>
                    <td><?php echo $soru_metni; ?></td>
                    <td><?php echo $kullanici_adi; ?></td>
                    <td><?php echo $kullanici_soyadi; ?></td>
                    <td><?php echo $tarih; ?></td>
                </tr>
            </table>
        </form>
        <form action="cevap_ekle.php?<?=$id?>" method="post">
            <h3>CEVABINIZI YAZINIZ</h3>
            <div class="form-row">
                <label for="cevap1">Cevap</label>
                <textarea name="cevap_metni" id="cevap_metni"  class="form-control" rows="1" cols="30"></textarea>
            </div>
            <div class="form-row">
                <label for="soruyu_olusturan_kullanici_adi1">Adınız</label>
                <input type="text" name="kullanici_adic" class="form-control" id="kullanici_adic">
            </div>
            <div class="form-row">
                <label for="soruyu_olusturan_kullanici_soyad1">Soyadınız</label>
                <input type="text" name="kullanici_soyadic" class="form-control" id="kullanici_soyadic">
            </div>
            <input type="hidden" name="soru_id" value="<?=$id?>">
            <input type="submit" value="Cevap Ver" >
        </form>
    </div>
</body>
</html>