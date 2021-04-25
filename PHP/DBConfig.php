<?php
function Connect()
{
    $servername = "127.0.0.1";
    $username = "Eds2010";
    $password = "password123";
    $dbname = "eds-2010";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}


function FindUtente($pass, $username)
{

    $conn = Connect();
    $sql = "SELECT id_cliente, username, password, amministratore FROM cliente WHERE username=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param('s',$username);
    $stmt->execute();
    $result=$stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    $conn->close();
    if (password_verify($pass, $row['password'])) {
        $_SESSION['id'] = $row["id_cliente"];
        $_SESSION['user'] = $row["username"];
        $_SESSION['tipo'] = $row["amministratore"];
        header("location: ../PHP-HTML/CronologiaTicket.php");
        exit();
    } else
        return null;
    // $conn->close();
}

function InserisciUtente($username, $password, $nome, $cognome, $telefono, $mail, $Amministratore)
{
    session_start();
    $Amministratore = 0;
    set_time_limit(0);
    $conn = Connect();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    // $hash = $conn->real_escape_string($hash);
    $sql = 'INSERT INTO cliente ( username, password, nome, cognome, telefono, mail, amministratore) VALUES ( "' . $username . '", "' . $hash . '", "' . $nome . '", "' . $cognome . '", "' . $telefono . '", "' . $mail . '", "' . $Amministratore . '")';
    //gestire da lato php e query il checkbox "Amministratore" tramite session
    // if ($conn->query($sql) === TRUE) {
    //     // echo "Nuova denuncia aggiunta";
    //     echo '<br><a href="../PHP-HTML/GestioneTicket.php">Back</a>';
    //     return true;
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    //     echo '<br><a href="../PHP-HTML/Registrazione.php">Back</a>';
    //     return false;
    // }
    $sql = $conn->query($sql);

    $result = FindUtente($hash, $username);
    $_SESSION['id'] = $result["id_cliente"];
    $_SESSION['user'] = $username;

    header("location: ../PHP-HTML/Login.php");
}

function InserisciTicket($marca, $modello, $numero_serie, $anomalia, $categoria, $garanzia, $tipo_apparecchio)
{
    session_start();
    set_time_limit(0);
    $conn = Connect();
    $fkcliente=$_SESSION['id'];
    $sql = 'INSERT INTO apparecchio ( marca, modello, numero_serie, anomalia, categoria, garanzia, tipo_apparecchio, fk_cliente) VALUES ( "' . $marca . '", "' . $modello . '", "' . $numero_serie . '", "' . $anomalia . '", "' . $categoria . '", "' . $garanzia . '", "' . $tipo_apparecchio . '", "'.$fkcliente.'")';
    if ($conn->query($sql) === TRUE) {
        echo "Nuovo ticket aggiunto";
        echo '<br><a href="../PHP-HTML/CronologiaTicket.php">Back</a>';
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<br><a href="../PHP-HTML/InserimentoTicket.php">Back</a>';
        return false;
    }
    $conn->close();
}



function checkAdmin($username)
{
    $conn = Connect();
    $sql = "SELECT amministratore FROM cliente WHERE username='$username";
    if ($sql = "1") {
        return true;
    } else {
        return false;
    }
}
