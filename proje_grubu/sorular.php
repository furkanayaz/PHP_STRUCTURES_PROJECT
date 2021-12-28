<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORULARIN GÖRÜNTÜ SAYFASI</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
<body>
<?php
include 'config.php';
// Soruları beğenisi yüksek olana göre listelemek için sorgumuzu yazıyoruz.
$sql = "SELECT * FROM questions ORDER by liked DESC";

// Sorgumuzu MySQL veritabanında çalıştırıyoruz
$sonuc = mysqli_query($baglanti, $sql);

// Soruların satır sayısını alıyoruz.
$num_satir = mysqli_num_rows($sonuc);

if (isset($_SESSION['kullanici'])) {
    if (isset($_GET['islem']) && $_GET['islem'] == 'sil') {
        $id = $_GET['id'];
        $sql = "DELETE FROM questions WHERE id = '$id'";
        $sonuc = mysqli_query($baglanti, $sql);
        header("Location: sorular.php");
    }
}
/**
 * @param $id
 * @param int $tip
 * @return array|int[]|string[]
 */
function getLike($id, $tip = 0)
{
    include 'config.php';
    $likeSql = "Select COUNT(*) as sayi from like_table where soru_id = $id and begenme_id = $tip";
    $likeSonuc = mysqli_query($baglanti, $likeSql);
    $likeSatir = mysqli_fetch_assoc($likeSonuc);
    if ($likeSatir) return $likeSatir;
    return ["sayi" => 0];
}

/**
 * Kategoriyi getirir.
 * @param $id
 * @return array|string[]
 */
function getCategory($id)
{
    include 'config.php';
    $categorySql = "Select * from categories where id = '$id'";
    $categorySonuc = mysqli_query($baglanti, $categorySql);
    $categorySatir = mysqli_fetch_assoc($categorySonuc);
    if ($categorySatir)
        return $categorySatir;
    return ["name" => "Kategori Bulunamadı"];
}

?>
<div class="container">
    <h2>Sorular</h2>

    <?php
    if ($num_satir > 0) { ?>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Soru Başlığı</th>
                <th>Soru Metni</th>
                <th>Kullanıcı Adı</th>
                <th>Kullanıcı Soyadı</th>
                <th>Kategori</th>
                <th>Eklenme Tarihi</th>
                <th>Güncelle</th>
                <th>Sil</th>
                <th>Cevap</th>
                <th>Beğenme Durumu</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($satir = mysqli_fetch_assoc($sonuc)) { ?>
                <tr>
                    <td><?= $satir['id'] ?></td>
                    <td><?= $satir['soru_basligi'] ?></td>
                    <td><?= $satir['soru_metni'] ?></td>
                    <td><?= $satir['kullanici_adi'] ?></td>
                    <td><?= $satir['kullanici_soyadi'] ?></td>
                    <td><?= getCategory($satir['category_id'])['name'] ?></td>
                    <td><?= $satir['sorunun_olusturuldugu_tarihi'] ?></td>
                    <td><a href="guncelle_form.php?id=<?= $satir['id'] ?>&islem=guncelle">Güncelle</a></td>
                    <td><a href="sorular.php?id=<?= $satir['id'] ?>&islem=sil">Sil</a></td>
                    <td><a href="cevaplar.php?id=<?= $satir['id'] ?>">Cevap</a></td>
                    <td>
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="begenme.php?soru_id=<?= $satir['id'] ?>&begenme_durum=1">
                                <i class="fas fa-thumbs-up"></i>
                                <span class="ml-2"><?= $satir['liked'] ?></span>
                            </a>
                            <a href="begenme.php?soru_id=<?= $satir['id'] ?>&begenme_durum=0">
                                <i class="fas text-danger fa-thumbs-down"></i>
                                <span class="ml-2"><?= $satir['dislike'] ?></span>
                            </a>

                        </div>
                    </td>
                </tr>
                <?php
            } ?>
            </tbody>
        </table>
        <?php
    }
    ?>
    <input type="button" onClick="location.href='soru_ekle_form.php'" value="Soru Ekle"/>

    <input type="button" onClick="location.href='cikis_sayfasi.php'" value="Çıkış Yap">


</div>
</body>
</html>