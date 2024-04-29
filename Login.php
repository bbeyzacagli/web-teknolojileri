<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>Giriş Yap</title>
  </head>
  
   
  <body class="bg1">  
    <nav class="navbar navbar-expand-lg fixed-top border-bottom bg-dark navbar-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="./index.html"><b>BEYZA ÇAĞLI</b></a>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item navbarClik navbarHover ">
                        <a href="./index.html" class="nav-link text-muted">Hakkımda</a>
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
                        <a href="./Login.html" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>

	<main>

		<div class="container">
			
		<p>
            <?php
            if(isset($_POST['email']) && isset($_POST['sifre'])) 
            { 
                    $email = $_POST['email'];
                    $sifre = $_POST['sifre'];
 
                    if(empty($email) || empty($sifre)) 
                    {
                        echo 'Bu alanı boş bırakmayın';
                    } 
                    else 
                    {
                        if($email == 'b211210084@ogr.sakarya.edu.tr' && $sifre == 'b211210084') 
                        {
							session_start();
							$_SESSION['email'] = 'b211210084@ogr.sakarya.edu.tr';
							$_SESSION['sifre'] = 'b211210084';
							echo '<br><br><br><br><br><br><br><br><br>';
							echo 'Başarıyla giriş yapıldı. Hoşgeldin B211210084.';
							echo '<br><br><br><br><br><br><br><br><br><br><br>';

                    	}							
						else 
						{
							echo '<br><br><br><br><br><br><br>';
							echo 'Kullanıcı adı ya da şifre hatalı girildi.<br><br>Tekrar deneyiniz.';
							header("Refresh: 3; url=login.html");
							echo '<br><br><br><br><br><br><br><br><br><br><br>';
						}
					}
			}		 


            ?>
        </p>

	</main>



    <footer class="bg-dark f text-white text-center">
        Beyza ÇAĞLI © 2024 
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>