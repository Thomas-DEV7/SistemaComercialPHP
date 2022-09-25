<?php

include_once('conexao.php');



$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


	try 
	{

		$stmt = $conn->prepare("UPDATE tb_usuario SET 
													  nm_usuario = :nome,
													  nm_email = :email,
													  nm_senha = :senha WHERE cd_usuario= :id");

		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
							 ':email' => $email,
							 ':senha' => $senha));
		
		header( "refresh:0;url=consultaUsuario.php" );

		echo "<script>alert('Usuario ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>