<?php
session_start();
require '../PHP/DBConfig.php';
if (!isset($_SESSION['id'])) {
    header("location:../PHP-HTML/Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="../CSS/Stylesheet.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <title>CronologiaTicket</title>
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
                        <a class="nav-link" href="../PHP-HTML/InserimentoTicket.php?value=">Crea Ticket</a>
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

    <div class="selctionButtons">
        <form method="POST">
            <h1 class="header_cronologiaticket">Seleziona una vista della Tabella:</h1>
            <button class="buttonTicket" id="optradio1" type="submit" name="optradio1">In Corso</button>
            <button class="buttonTicket" id="optradio2" type="submit" name="optradio2">Completati</button>
            <button class="buttonTicket" id="optradio3" type="submit" name="optradio3">Falliti</button>
        </form>
    </div>
    <?php
    if (isset($_POST["optradio1"])) {
    ?>
        <!-- tabella IN CORSO-->
        <h1 class="header_cronologiaticket">Ticket in Corso</h1>
        <div class=tabella>
            <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Stato</th>
                        <th scope="col">Data Fine Prevista</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = Connect();
                    $id = $_SESSION['id'];
                    $sql = $con->prepare("SELECT id_ticket, descrizione, stato, data_fine FROM ticket INNER JOIN cliente ON ticket.fk_cliente=cliente.id_cliente WHERE ticket.stato='In Corso' AND ticket.fk_cliente=?;");
                    $sql->bind_param("i", $id);
                    $sql->execute();
                    $result = $sql->get_result();
                    do {
                        $row = $result->fetch_assoc();
                        if ($row) {
                            echo "<tr>
                    <td>" . $row["id_ticket"] . "</td>
                    <td>" . $row["descrizione"] . "</td>
                    <td>" . $row["stato"] . "</td>
                    <td>" . $row["data_fine"] . "</td>
                    </tr>";
                        }
                    } while ($row);
                    ?>
                </tbody>
            </table>
        </div> <br><br><br>
    <?php
    } else if (isset($_POST["optradio2"])) {
    ?>
        <!-- tabella COMPLETATO -->
        <h1 class="header_cronologiaticket">Ticket Completati</h1>
        <div class=tabella>
            <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Stato</th>
                        <th scope="col">Data Inizio</th>
                        <th scope="col">Data Fine</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = Connect();
                    $id = $_SESSION['id'];
                    $sql = $con->prepare("SELECT id_ticket, descrizione, stato, data_fine, data_inizio FROM ticket INNER JOIN cliente ON ticket.fk_cliente=cliente.id_cliente WHERE ticket.stato='Completato' AND ticket.fk_cliente=?;");
                    $sql->bind_param("i", $id);
                    $sql->execute();
                    $result = $sql->get_result();
                    do {
                        $row = $result->fetch_assoc();
                        if ($row) {
                            echo "<tr>
                    <td>" . $row["id_ticket"] . "</td>
                    <td>" . $row["descrizione"] . "</td>
                    <td>" . $row["stato"] . "</td>
                    <td>" . $row["data_inizio"] . "</td>
                    <td>" . $row["data_fine"] . "</td>
                    </tr>";
                        }
                    } while ($row);
                    ?>
                </tbody>
            </table>
        </div>
    <?php
    } else if (isset($_POST["optradio3"])) {
    ?>
    <!-- tabella FALLITO -->
    <h1 class="header_cronologiaticket">Ticket Falliti</h1>
        <div class=tabella>
            <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Stato</th>
                        <th scope="col">Data Inizio</th>
                        <th scope="col">Data Fine</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = Connect();
                    $id = $_SESSION['id'];
                    $sql = $con->prepare("SELECT id_ticket, descrizione, stato, data_fine, data_inizio FROM ticket INNER JOIN cliente ON ticket.fk_cliente=cliente.id_cliente WHERE ticket.stato='Fallito' AND ticket.fk_cliente=?;");
                    $sql->bind_param("i", $id);
                    $sql->execute();
                    $result = $sql->get_result();
                    do {
                        $row = $result->fetch_assoc();
                        if ($row) {
                            echo "<tr>
                    <td>" . $row["id_ticket"] . "</td>
                    <td>" . $row["descrizione"] . "</td>
                    <td>" . $row["stato"] . "</td>
                    <td>" . $row["data_inizio"] . "</td>
                    <td>" . $row["data_fine"] . "</td>
                    </tr>";
                        }
                    } while ($row);
                    ?>
                </tbody>
            </table>
        </div>
    <?php
    }
    ?>

    <div class="logout_text">
        <?php
        if ($_SESSION["tipo"] == 1) {
        ?>
            <p><b><a href="../PHP-HTML/GestioneTicket.php">Pagina Admin</a></b></p>
        <?php
        };
        ?>
        <br />
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