<link rel="stylesheet" href="../assets/css/consulta.css">
<?php

	echo"<h1>Excluir Funcionario</h1>";

	$cod = $_GET['id'];
	
	include_once('conexao.php');
	 
		$select = $conn->prepare("SELECT * FROM tb_funcionario where cd_funcionario=$cod");
		$select->execute();
	
		while($row = $select->fetch()) 
		{
			echo "<p>";
			echo "<br><b>Codigo: </b>".$row['cd_funcionario'];
			echo "<br><b>Nome: </b>".$row['nm_primeiro'];
            echo "<br><b>Sobrenome: </b>".$row['nr_cpf'];
            echo "<br><b>Email: </b>".$row['nm_email'];
			echo "</br>";
?>
	
	<button id="mod" onclick="window.location.href='confirmaExcluirFuncionario.php?id=<?php echo $row['cd_funcionario'];?>'">
		Excluir
	</button>
	
	<button id="delete" onclick="window.location.href='consultaFuncionario.php'">Voltar</button>

<?php
		}
?>