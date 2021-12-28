<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="container" >KİMLİK DOĞRULAMA</title>
    <link rel="stylesheet" type="text/css" href="parallax.css">
    <style>
        .container {
            position: absolute;
            top: 30%;
            left: 47.8%;
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            font-weight:bold;
    
        }

        .container2 {
            position: absolute;
            top: 35%;
            left: 50%;
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        .container3 {
            position: absolute;
            top: 40%;
            left: 47.8%;
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            font-weight:bold;
        }

        .container4 {
            position: absolute;
            top: 45%;
            left: 50%;
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        .container5 {
            position: absolute;
            top: 55%;
            left: 50%;
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        label {
        display: inline-block;
        width: 100px;
        text-align: left;
      }

      input[type=submit] {
        background-color: #000000;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;

    </style>
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

    <form action="uyelik_kontrol.php" method="post">
    <br><br><br>
            <label class="container" for="kullanici">Kullanıcı:</label>
            <input class="container2" type="text" name="kullanici" id="kullanici" placeholder="Kullanıcı Adı"><br>
            <label class="container3" for="sifre">Parola:</label>
            <input class="container4" type="text" name="sifre" id="sifre" placeholder="Parola"><br>
            <input class="container5" type="submit" value="Giriş Yap">
        </form>
    </body>
</html>