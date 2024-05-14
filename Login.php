<?php
    session_start();
    $user='b211210084@sakarya.edu.tr';
    $pass='b211210084';

    if(isset($_POST['gonder']))
    {
        $username=$_POST['email'];
        $sifre=$_POST['sifre'];

        if ($username==$user && $sifre==$pass)
        {
            $_SESSION["sifre"] = $sifre;
            header('location:index.php');
            exit();
        }
        else 
        {
          echo '<div style="padding: 10px; border-radius: 5px; margin:5px; margin-top:80px; border: 1px solid #90D26D;">';
          echo 'Kullanıcı adı ya da şifre hatalı girildi.<br><br>Tekrar deneyiniz.';
          header("Refresh: 2; url=login.php");
          echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
        }
    }
?>
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

            <a class="navbar-brand" href="./index.php"><b>BEYZA ÇAĞLI</b></a>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item navbarClik navbarHover ">
                        <a href="./index.php" class="nav-link text-muted">Hakkımda</a>
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
                        <a href="./Login.php" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>

    <header>
		<div class="bg4 text-white ">
			<div class="container">
					<h1><b>GİRİŞ YAPIN</b></h1>
			</div>
		</div>
	</header>

    <main>
        
          <div class="container">
           
          
           <div id="paragraf">	
            <form  method="POST">
              <div class="form-group">
                <label><br><br>E-mail adresiniz:</label>
                <input type="email" class="form-control" name="email" placeholder="'abc@sakarya.edu.tr'" required="zorunlu">
                <small class="form-text text-muted">* Zorunlu alan </small>
              </div>
			  <br><br>
              <div class="form-group">
                <label>Şifreniz:</label>
                <input type="password" class="form-control" name="sifre" required="zorunlu">
                <small class="form-text text-muted">* Zorunlu alan </small>
              </div>
			  <br>
               <button type="submit" class="btn btn-secondary" name="gonder">Gönder</button>
			   <br><br><br><br><br>
             </form>
          </div>
        
          </div>
      </main>

  </body>
  <footer class="bg-dark f text-white text-center">
    Beyza ÇAĞLI © 2024 
  </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>