<?php
require 'config.php';

if (isset($_GET['category_id']) && is_numeric($_GET['category_id']))
{
    $sql = "SELECT * FROM categories WHERE id =" . $_GET['category_id'];
    $result = mysqli_query($baglanti, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $category_name = $row['name'];
        $category_description = $row['description'];
    }
    else
    {
        echo "Kategori bulunamadı.";
    }
}
if (isset($_POST['id']) && $_POST['category_name'])
{
    $category_id = $_POST['id'];
    $category_name = $_POST['category_name'];
    $category_description = $_POST['category_description'];

    $sql = "UPDATE categories SET name = '$category_name', description = '$category_description' WHERE id = $category_id";

    $result = mysqli_query($baglanti, $sql);

    if ($result)
    {
        header("Location: category.php");
    }
    else
    {
        echo "Kategori güncellenemedi.";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori Güncelle</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<div class="d-flex flex-row justify-content-center align-items-center" style="height: 400px">
    <div class="col-8">
        <h1>Kategori Güncelleme</h1>
        <form action="" method="post">
            <div class="form-row">
                <label for="name">
                    Kategori Adı
                </label>
                <input type="text" name="category_name" id="name" class="form-control" value="<?php echo $category_name; ?>">

            </div>

               <div class="form-row">
                <label for="description">
                    Kategori Açıklaması
                </label>
                <textarea name="category_description" id="description" class="form-control"><?php echo $category_description; ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?=$_GET['category_id']?>">
            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </div>
    </div>
</div>
</body>
</html>
