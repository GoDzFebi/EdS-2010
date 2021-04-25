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

  <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top ">
    <div class="container">
      <a href="Index.php" class="navbar-brand">
        <img class="logo" src="Image/LogoSito.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./Index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./PHP-HTML/GestioneTicket.php">Miei Ticket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./PHP-HTML/InserimentoTicket.php">Crea Ticket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./PHP-HTML/Login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./PHP-HTML/FAQ.php?id=0">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- descrizione sito -->

  <!-- <div class="descrizionesito">
    <h1 class="text-center">Presentazione Sito</h1>
  </div> -->

  <!-- carosello -->

  <header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active">
      <img class="c-image" src="Image/callcenter.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Ottimo servizio clienti</h2>
          <soas class="lead">Raccogliamo ticket.</soas>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item">
      <img class="c-image" src="Image/phonerepair.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Ottimi operatori</h2>
          <soas class="lead">Ripariamo tutti i vostri dispositivi.</soas>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item">
      <img class="c-image" src="Image/computerrepair.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Ripariamo di tutto</h2>
          <soas class="lead">Ripariamo tutto, non solo cellulari</soas>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- categorie -->

  <div class="features-clean">
    <div class="container">
      <div class="intro">
        <h2 class="text-center">Categorie assistenza</h2>
      </div>
      <div class="row features">
        <div class="col-sm-6 col-lg-4 item"><img class="icon" src="Image/batteriaicon.png"></img>
          <h3> <a class="btn" href="PHP-HTML/InserimentoTicket.php">Batteria </a></h3>
          <p class="description">Batteria dura poco, problemi a caricare il dispositivo, il dispositivo non si carica, batteria gonfia, batteria scalda troppo...</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><img class="icon" src="Image/chiamateicon.png"></img>
          <h3> <a class="btn" href="PHP-HTML/InserimentoTicket.php">Chiamate</a></h3>
          <p class="description">Durante le chiamate non si sente l'audio o il destinatario non sente, problemi ad effettuare chiamate, problemi a ricevere telefonate...</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><img class="icon" src="Image/cameraicon.png"></img>
          <h3> <a class="btn" href="PHP-HTML/InserimentoTicket.php">Fotocamera</a></h3>
          <p class="description">La fotocamera non funziona, le foto sono sfocate, le foto sono nere, la fotocamera è rotta, il flash non funziona, non si vedono foto...</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><img class="icon" src="Image/wifiicon.png"></img>
          <h3> <a class="btn" href="PHP-HTML/InserimentoTicket.php">Connessioni WiFi</a></h3>
          <p class="description">Il dispositivo non rileva il wifi, la connessione è lenta, il dispositivo non riesce a connetersi, il dispositivo non funziona con wifi...</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><img class="icon" src="Image/appicon.png"></img>
          <h3> <a class="btn" href="PHP-HTML/InserimentoTicket.php">Applicazioni</a></h3>
          <p class="description">La app non si apre, l'app fa crashare il dispositivo, l'app non si installa, l'app blocca il telefono, l'app richiede permessi strani...</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><img class="icon" src="Image/hardwareicon.png"></img>
          <h3><a class="btn" href="PHP-HTML/InserimentoTicket.php">Hardware</a></h3>
          <p class="description">Il dispositivo ha poca ram, la gpu non regge certe applicazioni, la cpu si surriscalda troppo, problemi alla batteria, i tasti sono rotti...</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

  <!-- faq -->

  <h2 class="faqtitle">Domande frequenti</h2>
  <div class="container py-3">
    <div class="row">
      <div class="col-10 mx-auto">
        <div class="accordion" id="faqExample">
          <div class="card">
            <div class="card-header p-2" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Q: Perchè il telefono non si accende?
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
              <div class="card-body">
                <b>Risposta:</b> Prova a metterlo in carica, potrebbe essere scarico.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-2" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Q: La batteria è gonfia, perchè?
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
              <div class="card-body">
                <b>Risposta:</b> La batteria potrebbe essere vecchia e troppo utilizzata, va cambiata.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-2" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Q: La tv non si spegne.
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
              <div class="card-body">
                <b>Risposta:</b> stacca la spina.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Supportish.com <i>GESTIONE TICKET </i> Sito di gestione Ticket per la riparazione di dispositivi elettronici.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Contatti</h6>
          <ul class="footer-links">
            <li><a>Via Bozzini 13</a></li>
            <li><a>+39 389 579 1764</a></li>
            <li><a>ticketriparazione@gmail.com</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Nostri siti web</h6>
          <ul class="footer-links">
            <li><a href="">www.supportish.com</a></li>
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