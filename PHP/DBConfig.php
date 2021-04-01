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
            return $row;
            return $result;
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