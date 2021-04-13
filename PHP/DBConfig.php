<?php 
    function Connect(){
        $servername="localhost";
        $username="Eds2010";
        $password="password123";
        $dbname="eds-2010";

        $conn= new mysqli($servername,$username,$password,$dbname);
        
        if($conn -> connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }


    function FindUtente($pass, $username)
    {
        
        $conn = Connect();
        $sql = "SELECT * FROM cliente WHERE username='$username'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if(password_verify($pass, $row['password'])){
            return $result;
        }
        $conn->close();
    }

    function InserisciUtente($username, $password, $nome, $cognome, $telefono, $mail, $Amministratore){
        $Amministratore = 0;
        set_time_limit(0);
        $conn = Connect();
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $hash = $conn->real_escape_string($hash);
        $sql = 'INSERT INTO cliente ( username, password, nome, cognome, telefono, mail, amministratore) VALUES ( "' . $username . '", "' . $password . '", "' . $nome . '", "' . $cognome . '", "' . $telefono . '", "' . $mail . '", "' . $Amministratore . '")'; 
        //gestire da lato php e query il checkbox "Amministratore" tramite session
        if ($conn->query($sql) === TRUE) {
            echo "Nuova denuncia aggiunta";
            echo '<br><a href="../PHP-HTML/GestioneTicket.php">Back</a>';
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo '<br><a href="../PHP-HTML/Registrazione.php">Back</a>';
            return false;
        }
    }

    function InserisciTicket($marca, $modello, $numero_serie, $anomalia, $categoria, $garanzia, $tipo_apparecchio){
        set_time_limit(0);
        $conn = Connect();
        $sql = 'INSERT INTO apparecchio ( marca, modello, numero_serie, anomalia, categoria, garanzia, tipo_apparecchio) VALUES ( "' . $marca . '", "' . $modello . '", "' . $numero_serie . '", "' . $anomalia . '", "' . $categoria . '", "' . $garanzia . '", "' . $tipo_apparecchio . '")'; 
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



    function checkAdmin($username){
        $conn = Connect();
        $sql = "SELECT amministratore FROM cliente WHERE username='$username";
        if($sql="1"){
            return true;
        }
        else{
            return false;
        }
    }
?>