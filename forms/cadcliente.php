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
        <div class="form-style-2-heading">Cadastro de Cliente</div>
            <form action="" method="post">
                <label for="field1">
                    <span>Nome <span class="required">*</span></span>
                    <input type="text" class="input-field" name="nome" value=""/>
                </label>
                <label for="field1">
                    <span>Sobrenome <span class="required">*</span></span>
                    <input type="text" class="input-field" name="sobrenome" value=""/>
                </label><label for="field1">
                    <span>CPF: <span class="required">*</span></span>
                    <input type="number" class="input-field" name="cpf" maxlength="11" value=""/>
                </label>
                </label><label for="field1">
                    <span>RG: <span class="required">*</span></span>
                    <input type="number" class="input-field" name="rg" maxlength="11" value=""/>
                </label>
                <label for="field1">
                    <span>CEP: <span class="required">*</span></span>
                    <input type="number" class="input-field" name="cep" maxlength="8"  value=""/>
                </label>
                <label for="field1">
                    <span>Endereço: <span class="required">*</span></span>
                    <input type="text" class="input-field" name="endereco"  value=""/>
                </label>
                <label for="field1">
                    <span>Celular <span class="required">*</span></span>
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
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];


        include_once('conexao.php');

        try {
            $stmt = $connection->prepare("INSERT INTO tb_cliente (nm_primeiro, nm_sobrenome, nr_cpf, nr_rg, nr_cep, nr_endereco, nr_celular, nm_email, id_genero)
            VALUES (:nome, :sobrenome, :cpf, :rg, :cep, :endereco, :tel, :email, :genero)");

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':sobrenome', $sobrenome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':rg', $rg);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':genero', $sexo);

            $stmt->execute();

            echo "<script>alert('Cadastrado com Sucesso');</script>";
      
          } catch(PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
          }
          $connection = null;
    }

?>