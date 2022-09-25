<?php

include_once('conexao.php');



$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$cat = $_POST['cat'];
$valor = $_POST['valor'];
$estoque = $_POST['estoque'];
$empresa = $_POST['empresa'];
$cnpj = $_POST['cnpj'];

	try 
	{

		$stmt = $conn->prepare("UPDATE tb_produto SET nm_produto = :nome,
													  nm_categoria = :cat,
													  vl_produto = :valor,
													  qt_produto = :estoque,
													  nm_empresa = :empresa,
                                                      nr_cnpj = :cnpj WHERE cd_produto= :id");

		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
							 ':cnpj' => $cnpj,
							 ':cat' => $cat,
							 ':valor' => $valor,
							 ':estoque' => $estoque,
                             ':empresa' => $empresa));
		
		header( "refresh:0;url=consultaProduto.php" );

		echo "<script>alert('Produto ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>