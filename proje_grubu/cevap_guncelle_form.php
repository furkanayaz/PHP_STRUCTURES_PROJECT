<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Güncelle</title>
    <style>
        table,tr,td,th{
            border:1px solid black;
            text-align:center;

        }
    </style>
</head>
<body>

    <form action="cevap_guncelle.php" method="post">
        <table>
            <h3>GÜNCELLE</h3>
            <tr>
                <th>Id: </th>
                <td><input type="text" name="id" value="<?php echo $id; ?>" readonly="readonly"></td>
            </tr>
            <tr>
                <th>Cevap Metni: </th>
                <td><input type="text" name="cevap_metni" value="<?php echo $cevap_metni; ?>"></td>
            </tr>
            <tr>
                <th>Kullanıcı Adı: </th>
                <td><input type="text" name="kullanici_adic" value="<?php echo $kullanici_adic; ?>"></td>
            </tr>
            <tr>
                <th>Kullanıcı Soyadı: </th>
                <td><input type="text" name="kullanici_soyadic" value="<?php echo $kullanici_soyadic; ?>"></td>
            </tr>
            <tr>
                <th>Cevap Tarihi: </th>
                <td><input type="text" name="cevap_tarihi" value="<?php echo $cevap_tarihi; ?>" readonly="readonly" ></td>
            </tr>
             <tr>
                <td></td>
                <td><input type="submit"  value="Güncelle"></td>
            </tr>
 
       
        </table>
    </form>
</body>
</html>