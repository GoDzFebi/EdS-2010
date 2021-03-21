<?php
//session.start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="CSS/Stylesheet.css" rel="stylesheet" type="text/css" />
  <title>Supportish</title>
</head>

<body>

  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img class="logo" src="Image/LogoSito.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- descrizione sito -->

  <div class="descrizionesito">
    <h1 class="text-center">Presentazione Sito</h1>
    <p class="text-center">descrizione sito </p>
  </div>
  <!-- categorie -->

  <div class="features-clean">
    <div class="container">
      <div class="intro">
        <h2 class="text-center">Categorie Assistenza</h2>
      </div>
      <div class="row features">
        <div class="col-sm-6 col-lg-4 item"><img class="icon" src="Image/batteriaicon.png"></img>
          <h3 class="name">Batteria</h3>
          <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><img class="icon" src="Image/chiamateicon.png"></img>
          <h3 class="name">Chiamate</h3>
          <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><img class="icon" src="Image/cameraicon.png"></img>
          <h3 class="name">Fotocamera</h3>
          <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><img class="icon" src="Image/wifiicon.png"></img>
          <h3 class="name">Connessioni WiFi</h3>
          <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><img class="icon" src="Image/appicon.png"></img>
          <h3 class="name">Applicazioni</h3>
          <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><img class="icon" src="Image/hardwareicon.png"></img>
          <h3 class="name">Hardware</h3>
          <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

  <!-- footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Supportish.com <i>GESTIONE TICKET </i> Sito di gestione Ticket per la riparazione di dispositivi elettronici.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categorie Principali</h6>
          <ul class="footer-links">
            <li><a href="">Accensione e spegnimento</a></li>
            <li><a href="">Aggiornamenti software</a></li>
            <li><a href="">Applicazioni</a></li>
            <li><a href="">Backup e ripristino</a></li>
            <li><a href="">Batteria</a></li>
            <li><a href="">Bluetooth</a></li>
            <li><a href="">Chiamate</a></li>
            <li><a href="">Aiuto e supporto sull’utilizzo</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>:</h6>
          <ul class="footer-links">
            <li><a href="">Connessioni WiFi</a></li>
            <li><a href="">File</a></li>
            <li><a href="">Fotocamera</a></li>
            <li><a href="">Hardware</a></li>
            <li><a href="">Impostazioni</a></li>
            <li><a href="">Messaggi</a></li>
            <li><a href="">Problemi audio</a></li>
            <li><a href="">Prodotto bloccato</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
            <a href="#">Supportish</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- <footer class="footer">Copyright &copy;2020</footer> -->
</body>

</html>