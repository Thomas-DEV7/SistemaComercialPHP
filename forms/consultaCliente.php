<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/consulta.css">
    
    <title>CADASTRO CLIENTE</title>
</head>
<body>
    <header>
        <div class="row">
            <img src="../assets/img/toguro.jpeg" >
            <p>Patrão</p>
        </div>
        <div class="row">
            <h1>CONSULTA CLIENTES</h1>
        </div>
        <div class="row">
            <button id="back" onclick="javascript:location.href ='index.php';"><a href="#">VOLTAR</a></button>
        </div>
    </header>
                   
                
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
                            <button id="mod" onclick="window.location.href='alterarCliente.php?id=<?php echo $row['cd_cliente'];?>'">
                            Alterar
                        </button>

                        <button id="delete" onclick="window.location.href='excluirCliente.php?id=<?php echo $row['cd_cliente'];?>'">
                            Excluir
                        </button>
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