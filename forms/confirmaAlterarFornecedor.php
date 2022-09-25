<?php

include_once('conexao.php');



$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$pais = $_POST['pais'];
$cep = $_POST['cep'];
$num = $_POST['numero'];
$email = $_POST['email'];
$cel = $_POST['celular'];

	try 
	{

		$stmt = $conn->prepare("UPDATE tb_fornecedor SET nm_primeiro = :nome,
													  nr_cnpj = :cnpj,
													  nm_pais = :pais,
													  nr_cep = :cep,
													  nr_endereco = :num,
                                                      nm_email = :email,
													  nr_celular = :cel WHERE cd_fornecedor= :id");

		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
							 ':cnpj' => $cnpj,
							 ':pais' => $pais,
							 ':cep' => $cep,
							 ':num' => $num,
                             ':email' => $email,
                             ':cel' => $cel));
		
		header( "refresh:0;url=consultaFornecedor.php" );

		echo "<script>alert('FORNECEDOR ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>