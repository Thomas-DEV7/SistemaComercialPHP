<link rel="stylesheet" href="../assets/css/consulta.css">
<?php

	echo"<h1>Excluir Cliente</h1>";

	$cod = $_GET['id'];
	
	include_once('conexao.php');
	 
		$select = $conn->prepare("SELECT * FROM tb_cliente where cd_cliente=$cod");
		$select->execute();
	
		while($row = $select->fetch()) 
		{
			echo "<p>";
			echo "<br><b>Codigo: </b>".$row['cd_cliente'];
			echo "<br><b>Nome: </b>".$row['nm_primeiro'];
            echo "<br><b>Sobrenome: </b>".$row['nm_sobrenome'];
			echo "<br><b>CPF: </b>".$row['nr_cpf'];
			echo "<br><b>RG: </b>".$row['nr_rg'];
			echo "<br><b>CEP: </b>".$row['nr_cep'];
			echo "<br><b>Numero: </b>".$row['nr_endereco'];
			echo "<br><b>Celular: </b>".$row['nm_email'];
			echo "<br><b>Email: </b>".$row['id_genero'];
			echo "</p>";
?>
	
	<button id="mod" onclick="window.location.href='confirmaExcluirCliente.php?id=<?php echo $row['cd_cliente'];?>'">
		Excluir
	</button>
	
	<button id="delete" onclick="window.location.href='consultaCliente.php'">Voltar</button>

<?php
		}
?>