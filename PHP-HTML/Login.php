<?php
session_start();
require '../PHP/Login.php';
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

 <nav class="navbar navbar-expand-lg navbar-light fixed-top">
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
            <a class="nav-link" href="../PHP-HTML/InserimentoTicket.php?value=">Crea Ticket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../PHP-HTML/FAQ.php?id=0">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- <div  id="containerLogin">
  <h3 style="color:rgb(255, 255, 255);">Accedi</h3>
  <form action="" method="POST">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="username" name="user">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" placeholder="password" name="pwd">
    </div>
    <button id="loginButton" type="submit" name="submit">Accedi</button>
    <p><b><a id="register" href="Registrazione.php">Non hai un account? Registrati</a></b></p>
 </form>
</div> -->

<div class="row">
 <div class="col-md-6 mx-auto p-10">
   <div class="login-box">
    <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-space">
      <div class="login">
      <form action="" method="POST">
      <div class="group"><label class="label">Username</label> <input id="user" type="text" class="input" placeholder="Username" name="user"> </div>
      <div class="group"><label class="label">Password</label> <input id="pwd" type="password" class="input" placeholder="Password" name="pwd"> </div>
      <div class="group"> <input type="submit" class="button" value="Accedi" name="submit"> </div>
      </form>
    </div>
    <div class="sign-up-form">
    <form action="../PHP/Register.php" method="POST">
      <div class="group"> <label class="label">Nome</label> <input type="text" class="input" placeholder="Nome" name="nome"> </div>
      <div class="group"> <label class="label">Cognome</label> <input type="text" class="input" placeholder="Cognome" name="cognome"> </div>
      <div class="group"> <label class="label">Username</label> <input type="text" class="input" placeholder="Username" name="usr"> </div>
      <div class="group"> <label class="label">Password</label> <input type="password" class="input" placeholder="Password" name="pwd"> </div>
      <div class="group"> <label class="label">Email</label> <input type="text" class="input" placeholder="Email*" name="mail"> </div>
      <div class="group"> <label class="label">Telefono</label> <input type="text" class="input" placeholder="Telefono*" name="telefono"> </div>
      <div class="group"> <input type="submit" class="button" value="Registrati"> </div>
    </form>
    </div>
    </div>
    </div>
   </div>
 </div>
</div>
      
        
<!-- <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
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
</footer> !-->

</body>

</html>