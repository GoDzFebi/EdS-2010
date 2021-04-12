<?php
require "DBConfig.php";

InserisciUtente($_POST["usr"],$_POST["pwd"],$_POST["nome"], $_POST["cognome"], $_POST["telefono"], $_POST["mail"], $_POST["Amministratore"]);

?>