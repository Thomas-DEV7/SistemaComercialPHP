<?php

include_once('conexao.php');



$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$cep = $_POST['cep'];
$num = $_POST['numero'];
$email = $_POST['email'];
$cel = $_POST['celular'];

	try 
	{

		$stmt = $conn->prepare("UPDATE tb_cliente SET nm_primeiro = :nome,
													  nr_cpf = :cpf,
													  nr_rg = :rg,
													  nr_cep = :cep,
													  nr_endereco = :num,
                                                      nm_email = :email,
													  nr_celular = :cel WHERE cd_cliente = :id");

		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
							 ':cpf' => $cpf,
							 ':rg' => $rg,
							 ':cep' => $cep,
							 ':num' => $num,
                             ':email' => $email,
                             ':cel' => $cel));
		
		header( "refresh:0;url=consultaCliente.php" );

		echo "<script>alert('CLIENTE ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>