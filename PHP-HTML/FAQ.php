<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css" integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/Stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="CSS/FAQ.css" rel="stylesheet" type="text/css" />
    <title>FAQ</title>
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
                        <a class="nav-link" href="Index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="PHP - HTML/CronologiaTicket.php">Miei Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="PHP - HTML/InserimentoTicket.php">Crea Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="PHP - HTML/Login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="PHP - HTML/FAQ.php">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- FAQ -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 pa-0">
                <div class="faq-search-wrap bg-teal-light-3">
                    <div class="container">
                        <h1 class="display-5 text-white mb-20">Domande.</h1>
                        <div class="form-group w-100 mb-0">
                            <div class="input-group">
                                <input class="form-control form-control-lg filled-input bg-white" placeholder="Search by keywords" type="text">
                                <div class="input-group-append">
                                    <span class="input-group-text"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-sm-60 mt-30">
                    <div class="hk-row">
                        <div class="col-xl-4">
                            <div class="card">
                                <h6 class="card-header">
                                    Category
                                </h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex align-items-center active">
                                        <i class="ion ion-md-sunny mr-15"></i>Terms &amp; conditions<span class="badge badge-light badge-pill ml-15">06</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="ion ion-md-unlock mr-15"></i>Privacy policy<span class="badge badge-light badge-pill ml-15">14</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="ion ion-md-bookmark mr-15"></i>Terms of use<span class="badge badge-light badge-pill ml-15">10</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="ion ion-md-filing mr-15"></i>Documentation<span class="badge badge-light badge-pill ml-15">27</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="card card-lg">
                                <h3 class="card-header border-bottom-0">
                                    Terms and Conditions
                                </h3>
                                <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between activestate">
                                            <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">The Intellectual Property</a>
                                        </div>
                                        <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                            <div class="card-body pa-15">The Intellectual Property disclosure will inform users that the contents, logo and other visual media you created is your property and is protected by copyright laws.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Termination clause</a>
                                        </div>
                                        <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                            <div class="card-body pa-15">A Termination clause will inform that users’ accounts on your website and mobile app or users’ access to your website and mobile (if users can’t have an account with you) can be terminated in case of abuses or at your sole discretion.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">Governing Law</a>
                                        </div>
                                        <div id="collapse_3i" class="collapse" data-parent="#accordion_2">
                                            <div class="card-body pa-15">A Governing Law will inform users which laws govern the agreement. This should the country in which your company is headquartered or the country from which you operate your website and mobile app.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">Limit what users can do</a>
                                        </div>
                                        <div id="collapse_4i" class="collapse" data-parent="#accordion_2">
                                            <div class="card-body pa-15">A Limit What Users Can Do clause can inform users that by agreeing to use your service, they’re also agreeing to not do certain things. This can be part of a very long and thorough list in your Terms and Conditions agreements so as to encompass the most amount of negative uses.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">Limitation of liability of your products</a>
                                        </div>
                                        <div id="collapse_5i" class="collapse" data-parent="#accordion_2">
                                            <div class="card-body pa-15">No matter what kind of goods you sell, best practices direct you to present any warranties you are disclaiming and liabilities you are limiting in a way that your customers will notice.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_6i" aria-expanded="false">How to enforce Terms and Conditions</a>
                                        </div>
                                        <div id="collapse_6i" class="collapse" data-parent="#accordion_2">
                                            <div class="card-body pa-15">While creating and having a Terms and Conditions is important, it’s far more important to understand how you can make the Terms and Conditions enforceable. You should always use clickwrap to get users to agree to your Terms and Conditions. Clickwrap is when you make your users take some action – typically clicking something – to show they’re agreeing. Here’s how Engine Yard uses the clickwrap agreement with the I agree check box:</div>
                                        </div>
                                    </div>
                                </div>

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
</body>

</html>