<link rel="stylesheet" href="../assets/css/consulta.css">
<?php

	echo"<h1>Excluir Produto</h1>";

	$cod = $_GET['id'];
	
	include_once('conexao.php');
	 
		$select = $conn->prepare("SELECT * FROM tb_produto where cd_produto=$cod");
		$select->execute();
	
		while($row = $select->fetch()) 
		{
			echo "<p>";
			echo "<br><b>Codigo: </b>".$row['cd_produto'];
			echo "<br><b>Nome: </b>".$row['nm_produto'];
            echo "<br><b>Sobrenome: </b>".$row['nm_categoria'];
			echo "</br>";
?>
	
	<button id="mod" onclick="window.location.href='confirmaExcluirProduto.php?id=<?php echo $row['cd_produto'];?>'">
		Excluir
	</button>
	
	<button id="delete" onclick="window.location.href='consultaProduto.php'">Voltar</button>

<?php
		}
?>