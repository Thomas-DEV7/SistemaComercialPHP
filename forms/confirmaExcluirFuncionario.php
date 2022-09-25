<link rel="stylesheet" href="../assets/css/consulta.css">
<?php

$cod = $_GET['id'];


include_once('conexao.php');
	try 
	{
		   
		$delete = $conn->prepare("DELETE FROM tb_funcionario WHERE cd_funcionario=$cod");
		$delete->execute();
		echo "<h1>Funcionario excluido com sucesso</h1>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>
<button id="delete" onclick="window.location.href='consultaFuncionario.php'">Voltar</button>