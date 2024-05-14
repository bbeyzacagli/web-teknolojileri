<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <title>Anasayfa</title>
</head>
<body class="bg1">  


  <nav class="navbar navbar-expand-lg fixed-top border-bottom bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php"><b>BEYZA ÇAĞLI</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item navbarClik navbarHover ">
            <a href="./index.php" class="nav-link">Hakkımda</a>
          </li>
          <li class="nav-item  navbarClik navbarHover">
            <a href="./Özgeçmiş.html" class="nav-link text-muted">Özgeçmiş</a>
          </li>
          <li class="nav-item navbarClik navbarHover">
            <a href="./Şehrim.html" class="nav-link text-muted">Şehrim</a>
          </li>
          <li class="nav-item navbarClik navbarHover">
            <a href="./Takımımız.html" class="nav-link text-muted">Takımımız</a>
          </li>
          <li class="nav-item navbarClik navbarHover">
            <a href="./İlgi_Alanlarım.html" class="nav-link text-muted ">İlgi Alanlarım</a>
          </li>          
          <li class="nav-item navbarClik navbarHover">
            <a href="./İletişim.html" class="nav-link text-muted">İletişim</a>
          </li>
          <li class="nav-item navbarClik navbarHover">
            <a href="./Login.php" class="nav-link text-muted">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header>

	</header>
  <br>
  <div class="container-fluid mx-auto px-4"> 
    <div class="row">
      <div class="col-sm-12">
      <?php
    session_start();
    $_SESSION['expire_time'] = time() + 5; 
    if(isset($_SESSION["sifre"])){
        echo '<div style="background-color: gray; padding: 10px; border-radius: 5px; margin:5px; margin-top:40px; border: 1px solid #90D26D;">';
        echo 'Hoş geldiniz, "' . $_SESSION["sifre"] . '"!';
        echo '</div>';
        unset($_SESSION["sifre"]);
    }
    if(isset($_SESSION['expire_time']) && time() > $_SESSION['expire_time']) {
        session_unset();
        session_destroy();
}
?>
        <br><br><h3>BEN KİMİM?</h3>

        <p><dt>&#160;2 Şubat 2002 tarihinde İstanbul Büyükçekmece'de dünyaya geldim. 5 yaşından beri Düzce'de yaşıyorum. Anaokulunu, ilkokulu, ortaokulu ve liseyi Düzce'de
           okudum. Benden 6 yaş büyük bir ablam var. Küçüklüğümden beri yol göstericim ve en iyi arkadaşım hep o oldu. Genel olarak içe kapanık ve sessiz bir yapım var. 
           Dizi ve film izlemeyi çok severim. Aksiyon, polisiye ve sitcom izlemeyi seviyorum. Ailemle flm izlerken genellikle aksiyon ve romantik komedi tercih ediyoruz. Aynı şekilde
           kitap okumayı da çok severim. Bir kitabı başladığım gibi bitirmek isterim. Bu sebeple bomboş olduğum günlerde yeni kitaba başlarım. 
           <div class="row bg3 t">
            <h2 class="mb-0">
              OKUDUĞUM BAZI KİTAPLAR<br>
            </h2>
            <div class="card-body">
                <a href="https://www.dr.com.tr/kitap/gece-yarisi-kutuphanesi/edebiyat/roman/dunya-roman/urunno=0001922926001">
                  <img src="foto/gece.jpg" width="200px" height="100px" title="Gece Yarısı Kütüphanesi" class="img-fluid">
                </a>
                <a href="https://www.dr.com.tr/kitap/dogu-ekspresinde-cinayet/edebiyat/roman/polisiye/urunno=0000000059213">
                  <img src="foto/doğu.jpg" width="200px" height="100px" title="Doğu Ekspresinde Cinayet" class="img-fluid">
                </a>
                <a href="https://www.dr.com.tr/kitap/seker-portakali/edebiyat/roman/dunya-roman/urunno=0000000064031">
                  <img src="foto/şeker.jpg" width="200px" height="100px" title="Şeker Portakalı" class="img-fluid">
                </a>
                <a href="https://www.dr.com.tr/kitap/simyaci/edebiyat/roman/dunya-roman/urunno=0000000064552">
                  <img src="foto/simyacı.jpg" width="200px" height="100px" title="Simyacı" class="img-fluid">
                </a>
                <a href="https://www.dr.com.tr/kitap/senden-once-ben/edebiyat/roman/romantik/urunno=0000000440466">
                  <img src="foto/mby.jpg" width="200px" height="100px" title="Senden Önce Ben" class="img-fluid">
                </a>
                <a href="https://www.dr.com.tr/kitap/ucurtma-avcisi/edebiyat/roman/dunya-roman/urunno=0000000153127">
                  <img src="foto/uçurtma.jpg" width="200px" height="100px" title="Uçurtma Avcısı" class="img-fluid">
                </a>
            </div>
          </div>
            <dt>&#160;Sakin yerlerde yürüyüş yapmayı seviyorum. Oturduğumuz mahalle sakin bir yer olduğundan annemle sık sık yürüyüşe çıkarız. Bisiklet sürerken yüzüme vuran rüzgarın
              beni özgür hissettirmesini seviyorum. Annem ve ablamla puzzle yapmak benim için epey zevkli bir aktivite.</dt>
            <dt>Spor müsabakaları izlemeyi seviyorum. Fenerbahçeliyim. Futbol, voleybol ve basketbol maçlarını genelde takip ederim. Ablamla yaz olimpiyatları izlemek favorimiz.</dt>
            <div class="bg3">
              <h4 class="mb-0" style="color:rgb(81, 65, 77);">
                Mete Gazoz'a altın madalyayı kazandıran atışı:<br><br>
              </h4>
              <div style="text-align: center;">
              <iframe style="position: relative;" width="50%" height="315px" src="https://www.youtube.com/embed/LQ5GxZIiTCQ?si=DyLqhuymI-WJrysx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
            <dt>&#160;Son zamanlarda yurdumdaki salıncakta sallanırken müzik dinlemeyi de alışkanlık haline getirdim. Pop, R&B, Hip-Hop gibi türleri dinlemeyi severim.<br><br><br></dt>
          </dl>    
        </p>
      </div>
    </div>
  </div>
  <footer class="bg-dark f text-white text-center">
    Beyza ÇAĞLI © 2024 
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
