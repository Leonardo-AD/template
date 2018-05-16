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
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/overwrite.css" rel="stylesheet">
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
            <li role="presentation" class="active"><a href="generos.php">Gêneros Musicais</a></li>
            <li role="presentation"><a href="cadastrar.php">Cadastre-se</a></li>
            <li role="presentation"><a href="login.php">Login</a></li>
            <li role="presentation"><a href="quemsomos.php">Quem Somos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="service">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center">
            <h2>Services</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br> vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br>
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
            <h4>Responsive</h4>
            <div class="icon">
              <i class="fa fa-heart-o fa-3x"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
            <h4>Multi Purpose</h4>
            <div class="icon">
              <i class="fa fa-desktop fa-3x"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
            <h4>Easy Customize</h4>
            <div class="icon">
              <i class="fa fa-location-arrow fa-3x"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="2.2s">
            <h4>Quick Support</h4>
            <div class="icon">
              <i class="fa fa-laptop fa-3x"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
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
