<?php
session_start();
require '../PHP/DBConfig.php';
if (!isset($_SESSION['id'])) {
    header("location:../PHP-HTML/Login.php");
}

if (isset($_POST['accept'])) {
    $con = Connect();
    $ida = $_POST['idt'];
    $datainizi = $_POST['datainizio'];
    $datafin = $_POST['datafine'];
    $fkpda = $_POST['idpda'];

    $sql = $con->prepare("SELECT id_apparecchio, anomalia, fk_cliente FROM apparecchio WHERE id_apparecchio=?");
    $sql->bind_param('i', $ida);
    $sql->execute();
    $res = $sql->get_result();
    $desc = $res->fetch_assoc();

    $sql2 = $con->prepare("INSERT INTO ticket (data_inizio, data_fine, stato, descrizione, fk_pda, fk_apparecchio, fk_cliente) VALUES (?,?,'In Corso',?,?,?,?)");
    $sql2->bind_param('sssiii', $datainizi, $datafin, $desc['anomalia'], $fkpda, $desc['id_apparecchio'], $desc['fk_cliente']);
    $sql2->execute();

    $sql3 = $con->prepare("UPDATE apparecchio SET is_accettato=1 WHERE id_apparecchio=?");
    $sql3->bind_param('i', $ida);
    $sql3->execute();
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link href="../CSS/Stylesheet.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <title>AccettazioneTicket</title>
</head>

<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top ">
        <div class="container">
            <a class="navbar-brand" href="../Index.php">
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

    <!-- approva ticket -->
    <div class="selctionButtons">
        <form method="POST">
            <h1 class="header_cronologiaticket">Seleziona una vista della Tabella:</h1>
            <button class="buttonTicket" id="optradio1" type="submit" name="optradio1">Non Accettati</button>
            <button class="buttonTicket" id="optradio2" type="submit" name="optradio2">Accettati</button>
        </form>
    </div>
    <?php
    if (isset($_POST["optradio1"])) {
    ?>
    <div class=tabella>
        <table id="myTable" class="table table-striped table-bordered" style="width:100%">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Apparecchio</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Anomalia</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $con = Connect();
                $id = $_SESSION['id'];
                $sql = $con->prepare("SELECT id_apparecchio, categoria, anomalia, marca FROM apparecchio WHERE is_accettato=0");
                $sql->execute();
                $result = $sql->get_result();
                $sql->close();
                do {
                    $row = $result->fetch_assoc();
                    if ($row) {
                        echo "<tr>
                     <td>" . $row["id_apparecchio"] . "</td>
                     <td>" . $row["marca"] . "</td>
                     <td>" . $row["categoria"] . "</td>
                     <td>" . $row["anomalia"] . "</td>
                     </tr>";
                    }
                } while ($row);
                $con->close();
                ?>
            </tbody>
        </table>
    </div>
    <?php
    } else if (isset($_POST["optradio2"])) {
    ?>
     <div class=tabella>
        <table id="myTable" class="table table-striped table-bordered" style="width:100%">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Apparecchio</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Anomalia</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $con = Connect();
                $id = $_SESSION['id'];
                $sql = $con->prepare("SELECT id_apparecchio, categoria, anomalia, marca FROM apparecchio WHERE is_accettato=1");
                $sql->execute();
                $result = $sql->get_result();
                $sql->close();
                do {
                    $row = $result->fetch_assoc();
                    if ($row) {
                        echo "<tr>
                     <td>" . $row["id_apparecchio"] . "</td>
                     <td>" . $row["marca"] . "</td>
                     <td>" . $row["categoria"] . "</td>
                     <td>" . $row["anomalia"] . "</td>
                     </tr>";
                    }
                } while ($row);
                $con->close();
                ?>
            </tbody>
        </table>
    </div>
    <?php
    }
    ?>
    <br />
    <div class="containereAdminTicket" id="containerApprovaTicket">
        <h3 style="color:rgb(255, 255, 255);">Approva Ticket</h3>
        <form action="" method="POST">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Numero Richiesta" name="idt">
                <input type="number" class="form-control" placeholder="PDA" name="idpda">
                <input type="date" class="form-control" placeholder="Data Inizio" name="datainizio">
                <input type="date" class="form-control" placeholder="Data Fine" name="datafine">
            </div>
            <button class="buttonTicket" id="acceptTicketButton" type="submit" name="accept">Accetta Ticket</button>
        </form>
    </div>

    <!-- logout -->
    <div class="logout_text">
        <p><b><a href="../PHP-HTML/GestioneTicket.php">Torna alla Pagina Admin</a></b></p>
        <p><b><a href="../PHP-HTML/CronologiaTicket.php">Torna ai tuoi Ticket</a></b></p>
        <p><b><a href="../PHP/Logout.php">Logout</a></b></p>
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
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

</html>