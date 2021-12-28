<?php
include "config.php";
/*@categories Tüm kategorielerin sorgusunu tutar*/
$categories = mysqli_query($baglanti, "select * from categories");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Ekle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center" style="height: 600px;
align-items: center;">
            <div class="col-6">
                <h2>Soru Ekle</h2>
                <form action="soru_ekle.php" method="post">
                    <div class="form-row">
                        <label for="soru">Soru</label>
                        <input type="text" class="form-control" id="soru" name="soru_basligi" placeholder="Soru">
                    </div>
                    <div class="form-row">
                        <label for="soru_metni">Soru Metni</label>
                        <input type="text" class="form-control" id="soru_metni" name="soru_metni" placeholder="Soru Metni">
                    </div>
                    <div class="form-row">
                        <label for="cevap">Cevap</label>
                        <input type="text" class="form-control" id="cevap" name="cevap" placeholder="Cevap">
                    </div>
                    <div class="form-row">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option selected disabled>Kategori Seçiniz</option>

                            <?php
                            /* Tüm kategorieleri yazdırır.*/
                            foreach (mysqli_fetch_all($categories) as $category): ?>
                                <option value="<?=$category[0]?>"><?=$category[1]?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-row">
                        <label for="kullanici_adi">Adınız</label>
                        <input type="text" class="form-control" id="kullanici_adi" name="kullanici_adi" placeholder="Adınız">
                    </div>
                    <div class="form-row">
                        <label for="kullanici_soyadi">Soyadınız</label>
                        <input type="text" class="form-control" id="kullanici_soyadi" name="kullanici_soyadi" placeholder="Soyadınız">
                    </div>

                    <button type="submit" class="btn btn-success">Soru Ekle</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>