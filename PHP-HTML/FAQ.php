<?php
$page = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css" integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/Stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="../CSS/FAQ.css" rel="stylesheet" type="text/css" />
    <title>FAQ</title>
</head>

<body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top ">
        <div class="container">
            <a href="#" class="navbar-brand">
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

    <!-- FAQ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 hedding pl-4 pt-5">
                        FAQ
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="container bootstrap snippet">
                    <div class="row">
                        <div class="col-sm-4 col-lg-3">
                            <h3 class="title-block first-child">Ricerca</h3>
                            <form role="form">
                                <label for="search" class="sr-only">Search</label>
                                <input type="search" class="form-control" id="search" placeholder="Cerca qui...">
                            </form>
                            <h3 class="title-block mt-3">Link Importanti</h3>
                            <div class="menu-lg">
                                <div class="item">
                                    <i class="fa text-primary"></i>
                                    <div class="content">
                                        <div class="title"><a href="FAQ.php?id=1">Smartphone</a></div>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur.
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="fa text-primary"></i>
                                    <div class="content">
                                        <div class="title"><a href="FAQ.php?id=2">TV</a></div>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur.
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="fa text-primary"></i>
                                    <div class="content">
                                        <div class="title"><a href="FAQ.php?id=3">Altro</a></div>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        switch ($page) {
                            case 1:
                        ?>
                                <div class="col-lg-9 col-sm-8">
                                    <h3 class="title-block second-child">Domande e Risposte</h3>
                                    <div class="panel-group" id="faqList">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title p-3 border rounded">
                                                    <a data-toggle="collapse" data-parent="#faqList" href="#questionOne" class="collapsed">
                                                        Smartphone non si accende.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="questionOne" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body border p-3">
                                                    <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title p-3 border rounded">
                                                    <a data-toggle="collapse" data-parent="#faqList" href="#questionTwo" class="collapsed">
                                                        Batteria gonfia.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="questionTwo" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body border p-3">
                                                    <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title p-3 border rounded">
                                                    <a data-toggle="collapse" data-parent="#faqList" href="#questionThree" class="collapsed">
                                                        Schermo nero.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="questionThree" class="panel-collapse collapse" style="height: 0px;">
                                                <div class="panel-body border p-3">
                                                    <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title p-3 border rounded">
                                                    <a data-toggle="collapse" data-parent="#faqList" href="#collapseFour" class="">
                                                        Telefono non si carica.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse in" style="">
                                                <div class="panel-body border p-3">
                                                    <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title p-3 border rounded">
                                                    <a data-toggle="collapse" data-parent="#faqList" href="#collapseFive" class="">
                                                        Telefono rotto.
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFive" class="panel-collapse collapse in" style="">
                                                <div class="panel-body border p-3">
                                                    <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    break;
                                case 2:
                                    ?>
                                        <div class="col-lg-9 col-sm-8">
                                            <h3 class="title-block second-child">Domande e Risposte</h3>
                                            <div class="panel-group" id="faqList">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title p-3 border rounded">
                                                            <a data-toggle="collapse" data-parent="#faqList" href="#questionOne" class="collapsed">
                                                                TV non si accende.
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="questionOne" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body border p-3">
                                                            <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title p-3 border rounded">
                                                            <a data-toggle="collapse" data-parent="#faqList" href="#questionTwo" class="collapsed">
                                                                TV fa fumo.
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="questionTwo" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body border p-3">
                                                            <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title p-3 border rounded">
                                                            <a data-toggle="collapse" data-parent="#faqList" href="#questionThree" class="collapsed">
                                                                Schermo nero.
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="questionThree" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="panel-body border p-3">
                                                            <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title p-3 border rounded">
                                                            <a data-toggle="collapse" data-parent="#faqList" href="#collapseFour" class="">
                                                                TV non si connette.
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse in" style="">
                                                        <div class="panel-body border p-3">
                                                            <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title p-3 border rounded">
                                                            <a data-toggle="collapse" data-parent="#faqList" href="#collapseFive" class="">
                                                                TV rotta.
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFive" class="panel-collapse collapse in" style="">
                                                        <div class="panel-body border p-3">
                                                            <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            break;
                                        case 3:
                                            ?>
                                                <div class="col-lg-9 col-sm-8">
                                                    <h3 class="title-block second-child">Domande e Risposte</h3>
                                                    <div class="panel-group" id="faqList">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title p-3 border rounded">
                                                                    <a data-toggle="collapse" data-parent="#faqList" href="#questionOne" class="collapsed">
                                                                        Sos.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="questionOne" class="panel-collapse collapse" style="height: 0px;">
                                                                <div class="panel-body border p-3">
                                                                    <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title p-3 border rounded">
                                                                    <a data-toggle="collapse" data-parent="#faqList" href="#questionTwo" class="collapsed">
                                                                        Sos.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="questionTwo" class="panel-collapse collapse" style="height: 0px;">
                                                                <div class="panel-body border p-3">
                                                                    <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title p-3 border rounded">
                                                                    <a data-toggle="collapse" data-parent="#faqList" href="#questionThree" class="collapsed">
                                                                        Sos.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="questionThree" class="panel-collapse collapse" style="height: 0px;">
                                                                <div class="panel-body border p-3">
                                                                    <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title p-3 border rounded">
                                                                    <a data-toggle="collapse" data-parent="#faqList" href="#collapseFour" class="">
                                                                        Sos.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFour" class="panel-collapse collapse in" style="">
                                                                <div class="panel-body border p-3">
                                                                    <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title p-3 border rounded">
                                                                    <a data-toggle="collapse" data-parent="#faqList" href="#collapseFive" class="">
                                                                        Sos.
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse in" style="">
                                                                <div class="panel-body border p-3">
                                                                    <p class="p-0 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac tortor vitae lorem lobortis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php
                                                break;
                                        }
                                                ?>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <br />
                    <br />
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
</body>

</html>