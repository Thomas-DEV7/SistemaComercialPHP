<?php

include_once('conexao.php');



$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$pais = $_POST['pais'];
$cep = $_POST['cep'];
$num = $_POST['numero'];
$email = $_POST['email'];
$cel = $_POST['celular'];

	try 
	{

		$stmt = $conn->prepare("UPDATE tb_funcionario SET nm_primeiro = :nome,
													  nr_cpf = :cpf,
													  nm_pais = :pais,
													  nr_cep = :cep,
													  nr_endereco = :num,
                                                      nm_email = :email,
													  nr_celular = :cel WHERE cd_funcionario= :id");

		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
							 ':cpf' => $cpf,
							 ':pais' => $pais,
							 ':cep' => $cep,
							 ':num' => $num,
                             ':email' => $email,
                             ':cel' => $cel));
		
		header( "refresh:0;url=consultaFuncionario.php" );

		echo "<script>alert('Funcionario ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>