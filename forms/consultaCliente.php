<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>CADASTRO CLIENTE</title>
    <style>
        @media screen and (max-width: 1337px) {
    .form-img {
        display: none;
    }

    .container {
        width: 50%;
    }

    .form {
        width: 100%;
    }
}

@media screen and (max-width: 1064px) {
    .container {
        width: 90%;
        height: auto;
    }

    .input-group {
        flex-direction: column;
        overflow-y: scroll;
        flex-wrap: nowrap;
        max-height: 10rem;
        padding-right: 5rem;
    }

    .gender-inputs {
        margin-top: 2rem;
    }

    .gender-group{
        flex-direction: column;
    }

    .gender-input {
        margin-top: 0.5rem;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="form-img">
            <img src="/formsFelipe/assets/img/undraw_forms_re_pkrt.svg" >
        </div>
        <div class="form">

                <div class="form-header">
                    <div class="title">
                        <h1>CONSULTA CLIENTES</h1>
                    </div>
                    <div class="login-button">
                        <button onclick="javascript:location.href ='menu.php';"><a href="#">VOLTAR</a></button>
                    </div>
                </div>
                <div class="input-group">
                <?php
                    include_once('conexao.php');
                    try{
                        $select = $conn->prepare('SELECT * FROM tb_cliente');
                        $select->execute();

                        while($row = $select->fetch())
                        {
                            echo "<p>";
                            echo "<br><b>CÓDIGO: </b>".$row['cd_cliente'];
                            echo "<br><b>NOME: </b>".$row['nm_primeiro'];
                            echo "<br><b>SOBRENOME: </b>".$row['nm_sobrenome'];
                            echo "<br><b>CPF: </b>".$row['nr_cpf'];
                            echo "<br><b>RG: </b>".$row['nr_rg'];
                            echo "<br><b>CEP: </b>".$row['nr_cep'];
                            echo "<br><b>ENDEREÇO: </b>".$row['nr_endereco'];
                            echo "<br><b>CELULAR: </b>".$row['nr_celular'];
                            echo "<br><b>EMAIL: </b>".$row['nm_email'];
                            echo "<br><b>GÊNERO: </b>".$row['id_genero'];
                            echo "</p><br>";
                            ?>
                            <button onclick="window.location.href='alterarCliente.php?id=<?php echo $row['cd_codigo'];?>'">
                            Alterar
                        </button>

                        <button onclick="window.location.href='excluirCliente.php?id=<?php echo $row['cd_codigo'];?>'">
                            Excluir
                        </button>
                        <button onclick="window.location.href='menu.php'">Voltar</button>
	                    <hr>
                        <?php
                        }
                    }
                    catch(PDOException $e){
                        echo 'ERROR: ' . $e->getMessage();
                    }
                
                ?>
                </div>

                
                

        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>