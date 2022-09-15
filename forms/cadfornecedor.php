<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>CADASTRO Fornecedor</title>
</head>

<body>
    <header>
        <h1>Cadastra de Fornecedor</h1>
    </header>
    <form action="" method="post">
    <div class="container">
        <div class="linha">
            <p>Nome: <strong>*</strong></p>
            <input type="text" name="nome" required/>
        </div>
        <div class="linha">
            <p>Sobrenome: <strong>*</strong></p>
            <input type="text" name="sobrenome" required/>
        </div>
        <div class="linha">
            <p>CEP: <strong>*</strong></p>
            <input type="number" name="cep" maxlength="11" required/>
        </div>
        <div class="linha">
            <p>CPNJ: <strong>*</strong></p>
            <input type="number" name="cnpj" maxlength="11" required/>
        </div>
        <div class="linha">
            <p>Empresa: <strong>*</strong></p>
            <input type="text" name="empresa" maxlength="11" required/>
        </div>
        <div class="linha">
            <p>Produto: <strong>*</strong></p>
            <input type="text" name="produto" maxlength="8" required/>
        </div>
        <div class="linha">
            <p>Endereço: <strong>*</strong></p>
            <input type="text" name="endereco" required/>
        </div>
        <div class="linha">
            <p>Pais: <strong>*</strong></p>
            <input type="text" name="pais" required/>

        </div>
        <div class="linha">
            <p>Telefone</p>
            <input type="text" name="tel" required/>
        </div>
        <div class="linha">
            <p>Email: <strong>*</strong></p>
            <input type="text" name="email" required/>
        </div>
        <div class="linha">
            <p>sexo: <strong>*</strong></p>
            <select name="sexo">
                <option value="M">Macho</option>
                <option value="F">Femêa</option>
            </select>
        </div>
        <div class="linha">
            <input id="btn" type="submit" value="Submit" />
        </div>
    </div>

    </form>
    <?php

    if (!empty($_POST)) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cnpj = $_POST['cnpj'];
        $empresa = $_POST['empresa'];
        $cep = $_POST['cep'];
        $produto = $_POST['produto'];
        $endereco = $_POST['endereco'];
        $pais = $_POST['pais'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $genero = $_POST['sexo'];


        include_once('conexao.php');

        try {
            $stmt = $conn->prepare("INSERT INTO tb_fornecedor (nm_primeiro, 
                                                               nm_sobrenome, 
                                                               nr_cnpj, 
                                                               nm_empresa, 
                                                               nr_cep, 
                                                               tp_produto, 
                                                               nr_endereco, 
                                                               nr_celular, 
                                                               nm_email, 
                                                               nm_pais, 
                                                               id_genero)
            VALUES (:primeironm, :sobrenome, :cnpj, :empresa,:produto, :cep, :endereco, :tel, :email, :pais, :genero)");

            $stmt->bindParam(':primeironm', $nome);
            $stmt->bindParam(':sobrenome', $sobrenome);

            $stmt->bindParam(':empresa', $empresa);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':produto', $produto);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':pais', $pais);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':genero', $genero);
            $stmt->bindParam(':cnpj', $cnpj);

            $stmt->execute();

            echo "<script>alert('Cadastrado com Sucesso');</script>";
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
        }
        $connection = null;
    }

    ?>