<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>CADASTRO CLIENTE</title>
    <style>
      *{
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
    </style>
</head>
<body>
    <div class="form-style-2">
        <div class="form-style-2-heading">Cadastro de Usuario</div>
            <form action="" method="post">
                <label for="field1">
                    <span>Nome <span class="required">*</span></span>
                    <input type="text" class="input-field" name="nome" value=""/>
                </label>
                <label for="field1">
                    <span>Sobrenome <span class="required">*</span></span>
                    <input type="text" class="input-field" name="sobrenome" value=""/>
                </label><label for="field1">
                    <span>CNPJ: <span class="required">*</span></span>
                    <input type="number" class="input-field" name="cnpj" maxlength="11" value=""/>
                </label>
                </label><label for="field1">
                    <span>Empresa: <span class="required">*</span></span>
                    <input type="number" class="input-field" name="empresa" maxlength="11" value=""/>
                </label>
                <label for="field1">
                    <span>Produto: <span class="required">*</span></span>
                    <input type="number" class="input-field" name="produto" maxlength="8"  value=""/>
                </label>
                <label for="field1">
                    <span>Endereço: <span class="required">*</span></span>
                    <input type="text" class="input-field" name="endereco"  value=""/>
                </label>
                <label for="field1">
                    <span>País: <span class="required">*</span></span>
                    <input type="text" class="input-field" name="pais" value=""/>
                </label>
                <label for="field1">
                    <span>Tel: <span class="required">*</span></span>
                    <input type="text" class="input-field" name="tel" value=""/>
                </label>

                <label for="field2"><span>Email <span class="required">*</span></span>
                    <input type="text" class="input-field" name="email" value="" />
                </label>
                <label for="field4"><span>Sexu</span>
                    <select name="sexo" class="select-field">
                        <option value="M">Macho</option>
                        <option value="F">Femêa</option>
                    </select>
                </label>

                <label>
                    <span> </span>
                    <input type="submit" value="Submit" />
                </label>
            </form>
    </div>
<?php

    if(!empty($_POST))
    {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cnpj = $_POST['cnpj'];
        $empresa = $_POST['empresa'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $pais = $_POST['pais'];

        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];


        include_once('conexao.php');

        try {
            $stmt = $connection->prepare("INSERT INTO tb_fornecedor (cd_cliente, nm_primeiro, nm_sobrenome, nr_cpf, nr_rg, nr_cep, nr_endereco, nr_celular, nm_email, id_genero)
            VALUES (:primeironm, :sobrenome, :cpf, :rg, :cep, :endereco, :tel, :email, :genero)");

            $stmt->bindParam(':primeironm', $nome);
            $stmt->bindParam(':sobrenome', $sobrenome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':rg', $rg);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':genero', $genero);

            $stmt->execute();

            echo "<script>alert('Cadastrado com Sucesso');</script>";
      
          } catch(PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
          }
          $connection = null;
    }

?>