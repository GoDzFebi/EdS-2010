<?php
require 'DBConfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["pwd"];
    $username = $_POST["user"];
    FindUtente($password, $username);
}

// echo "Identificazione non riuscita: nome utente o password errati <br />";
// echo "Torna a pagina di <a href='../PHP-HTML/Login.php'>login</a>";


// $result = FindUtente($password, $username);
// echo ($password);
// echo ($username);
