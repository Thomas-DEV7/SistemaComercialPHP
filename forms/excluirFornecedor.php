<link rel="stylesheet" href="../assets/css/consulta.css">
<?php

	echo"<h1>Excluir Fornecedor</h1>";

	$cod = $_GET['id'];
	
	include_once('conexao.php');
	 
		$select = $conn->prepare("SELECT * FROM tb_fornecedor where cd_fornecedor=$cod");
		$select->execute();
	
		while($row = $select->fetch()) 
		{
			echo "<p>";
			echo "<br><b>Codigo: </b>".$row['cd_fornecedor'];
			echo "<br><b>Nome: </b>".$row['nm_primeiro'];
            echo "<br><b>Sobrenome: </b>".$row['nm_sobrenome'];
			echo "<br><b>CPF: </b>".$row['nr_cnpj'];
			echo "<br><b>Celular: </b>".$row['nm_email'];
			echo "</p>";
?>
	
	<button id="mod" onclick="window.location.href='confirmaExcluirFornecedor.php?id=<?php echo $row['cd_fornecedor'];?>'">
		Excluir
	</button>
	
	<button id="delete" onclick="window.location.href='consultaFornecedor.php'">Voltar</button>

<?php
		}
?>