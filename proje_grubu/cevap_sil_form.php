<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SİL</title>
    <style>
        table, tr, td, th {
            border: 1px solid black;
            text-align: center;

        }
    </style>
</head>
<body>
<?php
include 'config.php';
// GET ile gelen id değerini $id değişkenine atıyoruz.
$id = $_GET['id'];

// Cevaplar tablosundan $id değerine göre sorgu işlemi yapıyoruz.
$sql = "SELECT * FROM answer WHERE id=$id";

$sonuc = mysqli_query($baglanti, $sql);
$num_satir = mysqli_num_rows($sonuc);
if ($num_satir > 0) {
    $satir = mysqli_fetch_assoc($sonuc);
    $cevap_metni = $satir['cevap_metni'];
    $kullanici_adic = $satir['kullanici_adi'];
    $kullanici_soyadic = $satir['kullanici_soyadi'];
    $cevap_tarihi = $satir['cevap_tarihi'];
}

?>
<table>
    <h3>SİL</h3>
    <tr>
        <th>Id:</th>
        <td><?php echo $id ?></td>
    </tr>
    <tr>
        <th>Cevap Metni:</th>
        <td><?php echo $cevap_metni ?></td>
    </tr>
    <tr>
        <th>Kullanıcı Adı:</th>
        <td><?php echo $kullanici_adic ?></td>
    </tr>
    <tr>
        <th>Kullanıcı Soyadı:</th>
        <td><?php echo $kullanici_soyadic ?></td>
    </tr>
    <tr>
        <th>Cevap Tarihi:</th>
        <td><?php echo $cevap_tarihi ?></td>
    </tr>
</table>
<p style="font-weight:bold;">Cevabı Silmek İstediğinizden Eminmisiniz ?</p>
<input type="button" onClick="location.href='cevap_sil.php?id=<?php echo $id ?>'" value="Evet"/>
<input type="button" onClick="location.href='cevaplar.php'" value="Hayır">
</body>
</html>