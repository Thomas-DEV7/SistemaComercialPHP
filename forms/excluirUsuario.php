<link rel="stylesheet" href="../assets/css/consulta.css">
<?php

	echo"<h1>Excluir Usuario</h1>";

	$cod = $_GET['id'];
	
	include_once('conexao.php');
	 
		$select = $conn->prepare("SELECT * FROM tb_Usuario where cd_usuario=$cod");
		$select->execute();
	
		while($row = $select->fetch()) 
		{
			echo "<p>";
			echo "<br><b>Codigo: </b>".$row['cd_usuario'];
			echo "<br><b>Nome: </b>".$row['nm_usuario'];
            echo "<br><b>Sobrenome: </b>".$row['nm_email'];
			echo "</br>";
?>
	
	<button id="mod" onclick="window.location.href='confirmaExcluirUsuario.php?id=<?php echo $row['cd_usuario'];?>'">
		Excluir
	</button>
	
	<button id="delete" onclick="window.location.href='consultaUsuario.php'">Voltar</button>

<?php
		}
?>