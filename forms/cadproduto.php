<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>CADASTRO PRODUTO</title>
    <style>
      *{
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
    </style>
</head>
<body>
    
        <form action="" method="post">
                
                <input type="text" class="input-field" name="produto" value=""/>
                
                    
                <input type="text" class="input-field" name="cat" value=""/>
               
                <input type="number" class="input-field" name="valor" maxlength="11" value=""/>
                
                
                <input type="number" class="input-field" name="estoque" maxlength="11" value=""/>
                
                <input type="number" class="input-field" name="empresa" maxlength="8"  value=""/>
                
                <input type="text" class="input-field" name="cnpj"  value=""/>
                
                <input type="submit" value="Submit" />
                
            </form>
    </div>
<?php

    if(!empty($_POST))
    {
        $produto = $_POST['produto'];
        $cat = $_POST['cat'];
        $valor = $_POST['valor'];
        $estoque = $_POST['estoque'];
        $empresa = $_POST['empresa'];
        $cnpj = $_POST['cnpj'];


        include_once('conexao.php');

        try {
            $stmt = $conn->prepare("INSERT INTO tb_produto (nm_produto, nm_categoria, vl_produto, qt_produto, nm_empresa, nr_cnpj)
            VALUES (:prod, :cat, :valor, :estoque, :empresa, :cnpj)");

            $stmt->bindParam(':prod', $produto);
            $stmt->bindParam(':cat', $cat);
            $stmt->bindParam(':valor', $valor);
            $stmt->bindParam(':estoque', $estoque);
            $stmt->bindParam(':empresa', $empresa);
            $stmt->bindParam(':cnpj', $cnpj);
            
            $stmt->execute();

            echo "<script>alert('Cadastrado com Sucesso');</script>";
      
          } catch(PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
          }
          $connection = null;
    }

?> 