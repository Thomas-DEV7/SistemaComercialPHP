<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "usbw";

    try
    {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE bancophp";

        $conn->exec($sql);
        echo "Banco de Dados criado com sucesso<br>";
    }

    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

?>