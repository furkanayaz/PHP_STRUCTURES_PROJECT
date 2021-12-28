<!DOCTYPE html>
<html>
<head>
    <title>Anasayfa</title>
    <link rel="stylesheet" type="text/css" href="parallax.css">
</head>


<body>
<header>
    <a href="#" class="logo">SorBakalım</a>
    <ul>
        <li><a href="#" class="anasayfa">Anasayfa</a></li>
        <li><a href="#sec" id="uye" class="uye">Üye ol / Giriş yap</a></li>
        <li><a href="soru_ekle.php" id="uye" class="uye">Soru Ekle</a></li>
        <li><a href="hakkinda.php" class="hakkinda">Hakkında</a></li>
    </ul>

</header>
<section>
    <img src="stars.png" id="stars">
    <img src="moon.png" id="moon">
    <img src="mountains.png" id="mountains">
    <img src="tree.png" id="tree">
    <h2 id="text">Sor Bakalım</h2>
</section>

<div class="sec" id="sec">
    <br><br><br>
    <h2>Sor Bakalım'a Hoşgeldin.</h2><br>
    <div class="vr"></div>
    <br><br>
    <h4>Hemen giriş yap ve sormaya başla.<br><br> Eğer bir hesabın yoksa sadece 1 dakikanı ayırarak üye<br> olabilirsin.
    </h4><br>
    <p>Sor bakalım ile aklına takılan her türlü soruyu sorabilir, onlarca cevabı<br> hızlıca okuyabilirsin. Sor bakalım
        tamamen ücretsiz olmakla beraber<br> ömür boyu ücretsiz bir şekilde kalacaktır.</p>


</div>

<script>
    let stars = document.getElementById('stars');
    let moon = document.getElementById('moon');
    let mountains = document.getElementById('mountains');
    let uye = document.getElementById('uye');
    let tree = document.getElementById('tree');

    window.addEventListener('scroll', function () {
        let value = window.scrollY;
        stars.style.left = value * 0.25 + 'px';
        moon.style.top = value * 0.50 + 'px';
        text.style.marginRight = value * 4 + 'px';

    })


</script>

<div class="main">
    <div class="box">
        <div class="buttonBox">
            <div id="btn"></div>
            <button type="button" class="toggle" onclick="giris()">Giriş Yap</button>
            <button type="button" class="toggle" onclick="kayit()">Kayıt Ol</button>
        </div>
        <form id="giris" method="post" action="uyelik_kontrol.php" class="inputs">
            <input type="email" class="input-alan" name="kullanici" placeholder="E-Mail" required>
            <input type="text" class="input-alan" name="sifre" placeholder="Şifre" required>
            <input type="checkbox" class="hatirla"><span>Beni Hatırla</span>
            <button type="submit" class="submitButton">Giriş Yap</button>
        </form>

        <form id="kayit" action="kayit.php" method="post" class="inputs">
            <input type="text" class="input-alan" name="name" placeholder="Kullanıcı Adı" required>
            <input type="email" class="input-alan" name="email" placeholder="E-Mail Adresini Giriniz" required>
            <input type="text" class="input-alan" name="password" placeholder="Hesap şifrenizi Giriniz" required>
            <input type="checkbox" class="kabul"><span>Şartları okudum ve kabul ediyorum.</span>
            <button type="submit" class="submitButton">Kayıt Ol</button>
        </form>
    </div>

</div>

<script>
    var x = document.getElementById("giris");
    var y = document.getElementById("kayit");
    var z = document.getElementById("btn");

    function kayit() {
        x.style.left = "-400px";
        y.style.left = "65px";
        z.style.left = "110px";

    }

    function giris() {
        x.style.left = "65px";
        y.style.left = "450px";
        z.style.left = "0px";

    }
</script>


</body>
</html>