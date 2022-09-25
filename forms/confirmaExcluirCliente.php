<link rel="stylesheet" href="../assets/css/consulta.css">
<?php

$cod = $_GET['id'];


include_once('conexao.php');
	try 
	{
		   
		$delete = $conn->prepare("DELETE FROM tb_cliente WHERE cd_cliente=$cod");
		$delete->execute();
		echo "<h1>Cliente excluido com sucesso</h1>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>
<button id="delete" onclick="window.location.href='consultaCliente.php'">Voltar</button>