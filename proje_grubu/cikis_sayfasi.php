<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çıkış Sayfası</title>
    <link rel="stylesheet" type="text/css" href="parallax.css">
</head>
<body>
<section>
            <img src="stars.png" id="stars">
            <img src="moon.png" id="moon">
            <img src="mountains.png" id="mountains">
            <img src="tree.png" id="tree">
        </section>
        <script>
            let stars = document.getElementById('stars');
            let moon = document.getElementById('moon');
            let mountains = document.getElementById('mountains');
            let uye = document.getElementById('uye');
            let tree = document.getElementById('tree');

            window.addEventListener('scroll',function(){
                let value = window.scrollY;
                stars.style.left=value * 0.25 + 'px';
                moon.style.top=value * 0.50 + 'px';
                text.style.marginRight=value * 4 + 'px';
                
            })
        </script>
<?php
session_unset();

session_destroy();
?>
<a href="anasayfa.php">Ana sayfa'ya geçiş yap</a>
</body>
</html>