<link rel="stylesheet" href="../assets/css/consulta.css">
<?php

$cod = $_GET['id'];


include_once('conexao.php');
	try 
	{
		   
		$delete = $conn->prepare("DELETE FROM tb_produto WHERE cd_produto=$cod");
		$delete->execute();
		echo "<h1>Produto excluido com sucesso</h1>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>
<button id="delete" onclick="window.location.href='consultaProduto.php'">Voltar</button>