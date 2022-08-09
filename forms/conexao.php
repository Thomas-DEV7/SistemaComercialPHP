<?php 
    $servername = "localhost:3307";
    $username = "root";
    $password = "usbw";
    $myDB = "bancophp";


    try{
        $connection = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectado com sucesso";
    }
    catch(PDOException $e){
        echo "Falha na conexão: " . $e->getMessage();
    }
?>