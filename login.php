<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Músicos de Aluguel</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link href="css/overwrite.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/logoo.png">
 
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="index.php"><span>Músicos de Aluguel</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="generos.php">Gêneros Musicais</a></li>
            <li role="presentation"><a href="cadastrar.php">Cadastre-se</a></li>
            <li role="presentation" class="active"><a href="login.php">Login</a></li>
            <li role="presentation"><a href="quemsomos.php">Quem Somos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="portfolios">
          <div class="text-center">
            <h2>Portfolio</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br> vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br>
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <a href="img/26.jpg" class="flipLightBox">
						<img src="img/26.jpg" width="230" height="230" alt="Image 1" />
						<span><b>LightBox Group 1, Image 1</b> Text to accompany first lightbox image</span>
					</a>

          <a href="img/27.jpg" class="flipLightBox">
						<img src="img/27.jpg" width="230" height="230" alt="Image 2" />
						<span><b>LightBox Group 1, Image 2</b><br />Text to accompany 2nd lightbox image</span>
					</a>

          <a href="img/28.jpg" class="flipLightBox">
						<img src="img/28.jpg" width="230" height="230" alt="Image 3" />
						<span><b>LightBox Group 1, Three</b> Text to accompany the third lightbox image</span>
					</a>

          <a href="img/29.jpg" class="flipLightBox">
						<img src="img/29.jpg" width="230" height="230" alt="Image 4" />
						<span><b>The Group 1 Final LightBox</b> Text to accompany the last of the lighboxes</span>
					</a>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <a href="img/30.jpg" class="flipLightBox">
						<img src="img/30.jpg" width="250" height="250" alt="Image 1" />
						<span><b>LightBox Group 1, Image 1</b> Text to accompany first lightbox image</span>
					</a>

          <a href="img/31.jpg" class="flipLightBox">
						<img src="img/31.jpg" width="250" height="250" alt="Image 2" />
						<span><b>LightBox Group 1, Image 2</b><br />Text to accompany 2nd lightbox image</span>
					</a>

          <a href="img/32.jpg" class="flipLightBox">
						<img src="img/32.jpg" width="250" height="250" alt="Image 3" />
						<span><b>LightBox Group 1, Three</b> Text to accompany the third lightbox image</span>
					</a>

          <a href="img/33.jpg" class="flipLightBox">
						<img src="img/33.jpg" width="250" height="250" alt="Image 4" />
						<span><b>The Group 1 Final LightBox</b> Text to accompany the last of the lighboxes</span>
					</a>
        </div>
      </div>
    </div>
  </div>

  <?php 
  	include 'rodape.php';
  ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>

</body>

</html>
