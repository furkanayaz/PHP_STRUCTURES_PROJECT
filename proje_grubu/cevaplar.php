<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEVAPLARIN GÖRÜNTÜ SAYFASI</title>
</head>
<style>
    table, tr, td, th {
        border: 1px solid black;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>

<body>
<?php
include 'config.php';
$id = null;
$hasComment = false;

// GET ile gelen değerleri değişkenlere atadık.
if (($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    // sorular tablosundan "id"ile eşleşen soru bilgilerini alıyoruz.

    $sql = "SELECT * FROM questions where id ='$id'";
    $post = mysqli_query($baglanti, $sql);

    // Soru bilgilerini döndürüyoruz.
    // ve 0'a eşitse soru yok demektir.
    if (mysqli_num_rows($post) === 0) {
        $hasComment = false;
    } else {
        // Değilse soruya ait cevap bilgilerini alıyoruz.
        $row = mysqli_fetch_assoc($post);

        $cevaplar = mysqli_fetch_all(
            mysqli_query($baglanti, "SELECT * FROM answer WHERE question_id =" . $row['id'] . ' ORDER BY like_count DESC'),
            MYSQLI_ASSOC
        );
        $hasComment = true;
    }
}

if (isset($_GET['delete']))
{
    $delete = $_GET['delete'];
    $soru_id = $_GET['soru_id'];
    $sql = "DELETE FROM answer WHERE id = '$delete'";
    $result = mysqli_query($baglanti, $sql);
    if ($result)
    {
        header("Location: cevaplar.php?id=$soru_id");
    }
    else
    {
        echo "Cevabınız silinemedi.";
    }
}
if (isset($_GET['like']))
{
    $like = $_GET['like'];
    $soru_id = $_GET['id'];
    $sql = "UPDATE answer SET like_count = like_count + 1 WHERE id = '$like'";
    $result = mysqli_query($baglanti, $sql);
    if ($result)
    {
        header("Location: cevaplar.php?id=$soru_id");
    }
    else
    {
        echo "Beğenme işlemi gerçekleşmedi.";
    }
}

if (isset($_GET['dislike']))
{
    $dislike = $_GET['dislike'];
    $soru_id = $_GET['id'];
    $sql = "UPDATE answer SET dislike_count = dislike_count + 1 WHERE id = '$dislike'";
    $result = mysqli_query($baglanti, $sql);
    if ($result)
    {
        header("Location: cevaplar.php?id=$soru_id");
    }
    else
    {
        echo "Beğenme işlemi gerçekleşmedi.";
    }
}

?>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-8">
            <div class="card shadow">
                <div class="card-title">
                    <h3 class="text-center">
                        <?php echo $row['soru_basligi']; ?>
                    </h3>
                </div>
                <div class="card-body">
                    <p class="text-center">
                        <?php echo $row['soru_metni']; ?>
                    </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between">
                    <span>
                        <?php echo $row['sorunun_olusturuldugu_tarihi']; ?>
                    </span>
                    <span>
                        <?php echo $row['kullanici_adi'] . ' ' . $row['kullanici_soyadi']; ?>
                    </span>
                    <span>
                        <i class="fa fa-heart"></i>
                        <?php echo $row['liked']; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column">
        <div class="col-12">
            <?php
            if (!$hasComment){
                ?>
            <div class="alert alert-info">
                Bu soruya ait cevap bulunmamaktadır
            </div>
            <?php }else{
            ?>
            <table class="table table-hover">
                <h2>Sorular</h2>
                <tr>
                    <th>Id</th>
                    <th>Cevap Metni</th>
                    <th>Kullanıcı Adı</th>
                    <th>Kullanıcı Soyadı</th>
                    <th>Eklenme Tarihi</th>
                    <th>İşlem</th>
                </tr>
                <?php
                if (count($cevaplar) > 0) {
                    foreach ($cevaplar as $cevap) { ?>
                        <tr>
                            <th>
                                <?php echo $cevap['id']; ?>
                            </th>
                            <th>
                                <?php echo $cevap['cevap_metni']; ?>
                            </th>
                            <th>
                                <?php echo $cevap['kullanici_adi']; ?>
                            </th>
                            <th>
                                <?php echo $cevap['kullanici_soyadi']; ?>
                            </th>
                            <th>
                                <?php echo $cevap['cevap_tarihi']; ?>
                            </th>
                            <th>
                                <div class="d-flex flex-row justify-content-evenly">
                                    <a class="edit" data-text="<?= $cevap['cevap_metni'] ?>"
                                       data-id="<?= $cevap['id'] ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="?delete=<?=$cevap['id']?>&soru_id=<?=$id?>">
                                        <i class="fa fa-trash text-danger"></i>
                                    </a>
                                    <a href="?id=<?=$id?>&like=<?=$cevap['id']?>">
                                        <i class="fas fa-thumbs-up"></i>
                                        <span class="ml-2"><?= $cevap['like_count'] ?></span>
                                    </a>
                                    <a href="?id=<?=$id?>&dislike=<?=$cevap['id']?>">
                                        <i class="fa fa-thumbs-down"></i>
                                        <span class="ml-2"><?= $cevap['dislike_count'] ?></span>
                                    </a>
                                </div>
                            </th>
                        </tr>
                    <?php }
                }
                ?>
            </table>
            <?php } ?>
        </div>
        <a href="cevap_ekle_form.php?id=<?= $id ?>">Cevap Ekle</a>
        <input type="button" onClick="location.href='cikis_sayfasi.php'" value="Çıkış Yap">
    </div>
    <script>
        var edit = document.querySelectorAll('.edit');
        for (var i = 0; i < edit.length; i++) {
            edit[i].addEventListener('click', function () {
                var id = this.getAttribute('data-id');
                var text = this.getAttribute('data-text');
                var metin = prompt('Soruyu Güncelleyin', text);
                if (metin != null) {
                    window.location.href = 'cevap_guncelle.php?id=' + id + '&cevap_metni=' + metin + '&post_id=' + '<?=$id?>';
                }
            });
        }

    </script>
</body>
</html>