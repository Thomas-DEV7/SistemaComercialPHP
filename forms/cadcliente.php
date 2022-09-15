<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>CADASTRO CLIENTE</title>

</head>
<body>
    <header>
        <h1>Cadastro de clientes</h1>
    </header>
    <form action="" method="post">
        <div class="container">
            <div class="linha">
                <p>Nome: <strong>*</strong></p>
                <input type="text" name="nome" value="" />
                
            </div>
            <div class="linha">
                <p>Sobrenome: <strong>*</strong></p>
                <input type="text" name="sobrenome" value="" />
            </div>
            <div class="linha">
                <p>CPF: <strong>*</strong></p>
                <input type="number" name="cpf" maxlength="11" value="" />
            </div>
            <div class="linha">
                <p>CPF: <strong>*</strong></p>
                <input type="number" name="cpf" maxlength="11" value="" />
            </div>
            <div class="linha">
                <p>RG: <strong>*</strong></p>
                <input type="number" name="rg" maxlength="11" value="" />
            </div>
            <div class="linha">
                <p>CEP: <strong>*</strong></p>
                <input type="number" name="cep" maxlength="8" value="" />
            </div>
            <div class="linha">
                <p>Endereço: <strong>*</strong></p>
                <input type="text" name="endereco" value="" />
            </div>
            <div class="linha">
                <p>Telefone: <strong>*</strong></p>
                <input type="text" name="tel" value="" />
            </div>
            <div class="linha">
                <p>Email: <strong>*</strong></p>
                <input type="text" name="email" value="" />
            </div>
        </div>
        <div class="linha">
        <select name="sexo">
            <p>sexo: <strong>*</strong></p>
            <option value="M">Macho</option>
            <option value="F">Femêa</option>
        </select>
        </div>
        <div class="linha">
            <input type="submit" value="Cadastrar" id="btn"/>
        </div>

        

    </form>
    </div>
    <?php

    if (!empty($_POST)) {
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
            $stmt = $conn->prepare("INSERT INTO tb_cliente (nm_primeiro, nm_sobrenome, nr_cpf, nr_rg, nr_cep, nr_endereco, nr_celular, nm_email, id_genero)
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
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
        }
        $connection = null;
    }

    ?>