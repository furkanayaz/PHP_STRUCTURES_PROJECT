<?php
// Veritabanı dosyasını içe aktarıyoruz.
include "config.php";

// Bütün kategorileri çekiyoruz.
$categories = mysqli_query($baglanti, "select * from categories");

// Eğer kullanıcı kategori eklemek isterse "if" bloğu çalışır.
if (isset($_POST['name']) && isset($_POST['description'])) {
    // Kategori adını ve açıklamasını alıyoruz.
    $category_name = $_POST['name'];
    $category_description = $_POST['description'];

    // Kategori adını ve açıklamasını veritabanına ekliyoruz.
    $insert_category = mysqli_query($baglanti, "insert into categories (name, description) values ('$category_name', '$category_description')");

    // Eğer kategori ekleme işlemi başarılı ise "if" bloğu çalışır.
    if ($insert_category){
        // Burda yönlendirme yapılır.
        header('Location:category.php');
    }
}

// Eğer kullanıcı kategori silmek isterse "if" bloğu çalışır.
if (isset( $_GET['delete'])) {
    $delete_category = mysqli_query($baglanti, "delete from categories where id =" .$_GET['delete']);

    // Eğer kategori silme işlemi başarılı ise "if" bloğu çalışır.
    if ($delete_category){
        header("Location: category.php");
    }
}

// Eğer kullanıcı kategori güncellemek isterse "if" bloğu çalışır.
if(isset($_POST['name']) && isset($_POST['description']) && isset($_GET['update'])) {
    // Kategori adını ve açıklamasını alıyoruz.
    $category_name = $_POST['name'];
    $category_description = $_POST['description'];

        // Kategori adını ve açıklamasını veritabanına güncelliyoruz.
     $update_category = mysqli_query($baglanti, "update categories set name = '$category_name', description = '$category_description' where id =" .$_GET['update']);
    // Eğer kategori güncelleme işlemi başarılı ise "if" bloğu çalışır.
    if ($update_category){
        header('Location: category.php');
    }
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategoriler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body>
<div class="container">
    <div class="d-flex flex-column">
        <div class="col-12">
            <h4>
                <a href="#" id="category-btn" class="btn-link">Kategori Ekle</a>
            </h4>
            <form action="" id="category-form" method="POST" class="d-none">
                <div class="form-row">
                    <label for="">Kategori Adı</label>
                    <input type="text" class="form-control" name="name" id="">
                </div>
                <div class="form-row">
                    <label for="description">Kategori Açıklaması</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Kaydet</button>
            </form>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kategori Adı</th>
                        <th>Kategori Açıklaması</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                // Kategorileri listeleyen sorgu.
                foreach (mysqli_fetch_all($categories) as $category): ?>
                    <tr>
                        <td><?=$category[1]?></td>
                        <td><?=$category[2] == null ? "Açıklama Girilmedi." : $category[2]?></td>
                        <td>
                        <a href="category_update.php?category_id=<?=$category[0]?>" class="btn btn-sm btn-primary edit">Düzenle</a>
                            <a href="?delete=<?=$category[0]?>" class="btn btn-sm btn-danger">Sil</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<script>
    // Kategori ekleme formunu gizleme ve gösterme.
    document.getElementById('category-btn').addEventListener('click', function () {
        document.getElementById('category-form').classList.toggle('d-none');
    });
</script>
</body>
</html>