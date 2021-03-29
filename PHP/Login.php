<?php
require 'DBConfig.php';


$password = $_POST["pwd"];
$username = $_POST["user"];



$result=FindUtente($password, $username);




if($result){
    
    
}
else {
    echo "Identificazione non riuscita: nome utente o password errati <br />";
    echo "Torna a pagina di <a href='../PHP-HTML/Login.php'>login</a>";
}
