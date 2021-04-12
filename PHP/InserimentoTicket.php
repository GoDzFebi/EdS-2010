<?php
require "DBConfig.php";

InserisciTicket($_POST["marca"], $_POST["modello"], $_POST["numero_serie"], $_POST["anomalia"], $_POST["categoria"], $_POST["garanzia"], $_POST["tipo_apparecchio"]);
?>