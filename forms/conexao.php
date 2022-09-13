<?php
$servername = "localhost:3307";
$username = "root";
$password = "usbw";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bancophp", 
  	               $username, 
  	               $password);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectado com sucesso ao banco de dados";
} catch(PDOException $e) {
  echo "Falha na conexão: " . $e->getMessage();
}
?>