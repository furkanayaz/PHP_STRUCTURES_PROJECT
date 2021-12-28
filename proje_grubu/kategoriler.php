<?php 
    $sql = $db->prepare("select * from questions inner join kategoriler on kategoriler.kategori_id = questions.soru_kategori where soru_kategori=?");
    $sql->execute(array($id));
    $c = $sql->fetchAll(PDO::FETCH_ASSOC);
    $x = $sql->rowCount();

    $b = $sonuc->prepare("select * from questions inner join kategoriler on kategoriler.kategori_id = questions.soru_kategori where soru_kategori=?");
    $b->execute(array($id));
    $z = $b->fetch(PDO::FETCH_ASSOC);
    $n = $b->rowCount();

    
    <div class="bul"> 
    <span style="color:red;"><?php echo $z["kategori_adi"];?></span> kategorisine ait 
    <span style="color:red;"><?php echo $n;?></span> tane sonuc bulundu

    </div>
    


    if($x){

        foreach($c as $m){

               if ($num_satir > 0){
        while($satir=mysqli_fetch_assoc($sonuc)){
        echo "<tr>";
            echo "<td>".$satir['id']."</td>";
            echo "<td>".$satir['soru_basligi']."</td>";
            echo "<td>".$satir['soru_metni']."</td>";
            echo "<td>".$satir['kullanici_adi']."</td>";
            echo "<td>".$satir['kullanici_soyadi']."</td>";
            echo "<td>".$satir['sorunun_olusturuldugu_tarihi']."</td>";
            echo "<td>".'<a href="guncelle_form.php?id=' . $satir['id'] . '">Güncelle</a>'."</td>"; 
            echo "<td>".'<a href="sil_form.php?id='.$satir['id'].'"> Sil </a>'."</td>";
            echo "<td>".'<a href="cevap_ekle_form.php">Cevap Ver  </a>'. '<a href="sorular.php">Cevap Verme</a>';
        echo "</tr>";
        }
    }



 



        }


    }else {

        echo "bu kategoriye ait hiçbir konu bulunmuyor";

    }

    $sql = $sonuc->prepare("select * from kategoriler");

    $sql->execute(array());
    $c = $sql->fetchAll(PDO::FETCH_ASSOC);
    $x = $sql->rowCount();

    <div class="kategori">
   <h2>kategoriler</h2>
    <ul> 
    

    if($x){

        foreach($c as $m){

            echo '<li><a href="?islem=kategori&id='.$m["kategori_id"].'">'.$m["kategori_adi"].'</a></li>';


        }


    }else {

        echo "hic kategori bulunmuyor";

    }


    </ul>
    </div>

?>
   


