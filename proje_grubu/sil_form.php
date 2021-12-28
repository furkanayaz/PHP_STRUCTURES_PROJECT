<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SİL</title>
    <style>
        table,tr,td,th{
            border:1px solid black;
            text-align:center;

        }
    </style>
</head>
<body>
    <?php 
     $id=$_GET['id'];
     include 'config.php';
     $sql="SELECT * FROM questions WHERE id=$id";
     $sonuc=mysqli_query($baglanti,$sql);
     $num_satir=mysqli_num_rows($sonuc);
     if ($num_satir > 0){
         $satir=mysqli_fetch_assoc($sonuc);
         $soru_basligi=$satir['soru_basligi'];
         $soru_metni=$satir['soru_metni'];
         $kullanici_adi=$satir['kullanici_adi'];
         $kullanici_soyadi=$satir['kullanici_soyadi'];
         $tarih=$satir['sorunun_olusturuldugu_tarihi'];
     }

    ?>
<table>
    <h3>SİL</h3>
    <tr>
        <th>Id: </th>
        <td><?php echo $id ?></td>
    </tr>
    <tr>
        <th>Soru Başlığı: </th>
        <td><?php echo $soru_basligi ?></td>
    </tr>
        <tr>
        <th>Soru Metni: </th>
        <td><?php echo $soru_metni ?></td>
        </tr>
    <tr>
        <th>Kullanıcı Adı: </th>
        <td><?php echo $kullanici_adi ?></td>
    </tr>
    <tr>
        <th>Kullanıcı Soyadı: </th>
        <td><?php echo $kullanici_soyadi ?></td>
    </tr>
    <tr>
        <th>Eklenme Tarihi:</th>
        <td><?php echo $tarih?></td>
    </tr>
</table>
<p style="font-weight:bold;">Soruyu Silme İstediğinizden Eminmisiniz ?</p>
<input type="button" onClick="location.href='sil.php?id=<?php echo $id ?>'" value="Evet" />
<input type="button" onClick="location.href='sorular.php'" value="Hayır">
</body>
</html>