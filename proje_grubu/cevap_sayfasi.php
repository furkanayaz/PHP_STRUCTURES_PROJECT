<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEVAP VERME SAYFASIdhd</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="d-flex flex-column">
            <?php
            include 'config.php';
            $sql="SELECT * FROM questions";
            $sonuc=mysqli_query($baglanti,$sql);
            $num_satir=mysqli_num_rows($sonuc);

            function getLike($id, $tip = 0) {
                include 'config.php';
                $likeSql = "Select COUNT(*) as sayi from like_table where soru_id = $id and begenme_id = $tip";
                $likeSonuc =mysqli_query($baglanti,$likeSql);
                $likeSatir=mysqli_fetch_assoc($likeSonuc);
                if($likeSatir) return $likeSatir;
                return ["sayi" => 0];
            }

            ?>
            <table class="table table-hover">
                <h2>Sorular</h2>
                <tr>
                    <th>Id</th>
                    <th>Soru Başlığı</th>
                    <th>Soru Metni</th>
                    <th>Kullanıcı Adı</th>
                    <th>Kullanıcı Soyadı</th>
                    <th>Eklenme Tarihi</th>
                    <th>Cevap</th>
                    <th>Beğenme Durumu</th>
                </tr>
                <?php
                if ($num_satir > 0){
                    while($satir=mysqli_fetch_assoc($sonuc)){
                        echo "<tr>";
                        echo "<td>".$satir['id']."</td>";
                        echo "<td>".$satir['soru_basligi']."</td>";
                        echo "<td>".$satir['soru_metni']."</td>";
                        echo "<td>".$satir['kullanici_adi']."</td>";
                        echo "<td>".$satir['kullanici_soyadi']."</td>";
                        echo "<td>".$satir['sorunun_olusturuldugu_tarihi']."</td>";
                        echo "<td>".'<a href="cevap_ekle_form.php?id='.$satir['id'].'">Cevap Ver  </a>'. "</td>";
                        echo "<td>".'<a href="begenme.php?soru_id='.$satir['id'].'&begenme_durum=1">Beğen  ('.getLike($satir["id"],1)["sayi"].')</a>'
                            . '<a href="begenme.php?soru_id='.$satir['id'].'&begenme_durum=0">Beğenme ('
                            .getLike($satir["id"])["sayi"].')</a>'."</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
            <input type="button" onClick="location.href='anasayfa.php'" value="Geri Dön">
        </div>
    </div>
</body>
</html>