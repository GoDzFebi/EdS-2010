<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Supportish</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../CSS/Stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image: url('../image/login.png');"> 

 <!-- navbar -->

 <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top ">
    <div class="container">
      <a href="../Index.php" class="navbar-brand">
        <img class="logo" src="../Image/LogoSito.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../Index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../PHP-HTML/CronologiaTicket.php">Miei Ticket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../PHP-HTML/InserimentoTicket.php">Crea Ticket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../PHP-HTML/Login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../PHP-HTML/FAQ.php?id=0">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div  id="containerRegister">
  <h3 style="color:rgb(255, 255, 255);">Registrati</h3>
  <form action="../PHP/Register.php" method="POST">
    <div class="form-group" id="registerform1">
      <input type="text" class="form-control" placeholder="NOME" name="nome">
    </div>
    <div class="form-group" id="registerform1">
      <input type="text" class="form-control" placeholder="USERNAME" name="usr">
    </div>
    <div class="form-group" id="registerform1">
      <input type="text" class="form-control" placeholder="TELEFONO*" name="telefono">
    </div>
    <button id="registerButton" type="submit" name="submit">Registrati</button>
    <div class="form-group" id="registerform2">
      <input type="text" class="form-control" placeholder="COGNOME" name="cognome">
    </div>
    <div class="form-group" id="registerform2">
      <input type="password" class="form-control" placeholder="PASSWORD" name="pwd">
    </div>
    <div class="form-group" id="registerform2">
      <input type="text" class="form-control" placeholder="MAIL*" name="mail">
    </div> 
 
 </form>
</div>
  <!-- footer 
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
   <footer class="footer">Copyright &copy;2020</footer> --> 
</body>

</html>