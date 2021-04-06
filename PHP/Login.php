<?php
require 'DBConfig.php';


$password = $_POST["pwd"];
$username = $_POST["user"];



$result=FindUtente($password, $username);
echo($password);
echo($username);



if($result){
    session_start();
    $_SESSION['pwd'] = $hash;
    echo( $_SESSION['pwd']);
    header("Location: ../PHP-HTML/CronologiaTicket.php");
    
}
else {
    echo "Identificazione non riuscita: nome utente o password errati <br />";
    echo "Torna a pagina di <a href='../PHP-HTML/Login.php'>login</a>";
}
