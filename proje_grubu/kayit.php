<?php
include 'config.php';

// Post isteği gelmişse.
if (!empty($_POST)) {
    // Formdan gelen verileri alalım.
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Sql sorgusu oluşturuyoruz.
    $sql = "INSERT INTO authentication (kullanici_adi, email, password) VALUES ('$name', '$email', '$password')";

    // Sorguyu çalıştıralım.
    $result = mysqli_query($baglanti, $sql);

    // son eklenen id değerini alalım.
    $id = mysqli_insert_id($baglanti);

    // Eğer sonuç varsa.
    if ($result) {
        // Session oluşturuyoruz.

        $_SESSION['kullanici'] = [
            'id' => $id,
            'name' => $name,
            'email' => $email,
        ];
        $_SESSION['kullanici_id'] = $id;
        // Yönlendiriyoruz.
        header("Location: anasayfa.php");
    } else {
        echo "Kayıt başarısız";
    }

}