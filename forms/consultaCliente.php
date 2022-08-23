<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/styless.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <script type="text/javascript" src="js/ajax.js"></script>
   <title>SISTEMA COMERCIAL - CONSULTA CLIENTE</title>
</head>
<body>
	
<?php  
	
	include_once('conexao.php');
	try 
	{	   
		$select = $conn->prepare('SELECT * FROM cliente');
		$select->execute();
	  
		while($row = $select->fetch()) 
		{
			echo "<p>";
			echo "<br><b>Codigo: </b>".$row['codigo'];
			echo "<br><b>Nome: </b>".$row['nome'];
			echo "<br><b>CPF: </b>".$row['cpf'];
			echo "<br><b>RG: </b>".$row['rg'];
			echo "<br><b>CEP: </b>".$row['cep'];
			echo "<br><b>Numero: </b>".$row['numero'];
			echo "<br><b>Celular: </b>".$row['celular'];
			echo "<br><b>Email: </b>".$row['email'];
			echo "<br>";
?>
	<button onclick="window.location.href='alterarCliente.php?id=<?php echo $row['codigo'];?>'">
		Alterar
	</button>
	
	<button onclick="window.location.href='exluirCliente.php?id=<?php echo $row['codigo'];?>'">
		Excluir
	</button>
	
	<button onclick="window.location.href='menu.php'">Voltar</button>
	<hr>
<?php
		}
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
 ?>
	
	</div>
 </body>
<html>