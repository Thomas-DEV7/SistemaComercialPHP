<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/consulta.css">
    
    <title>consulta Usuario</title>
</head>
<body>
    <header>
        <div class="row">
            <img src="../assets/img/toguro.jpeg" >
            <p>Patrão</p>
        </div>
        <div class="row">
            <h1>CONSULTA Usuario</h1>
        </div>
        <div class="row">
            <button id="back" onclick="javascript:location.href ='index.php';"><a href="#">VOLTAR</a></button>
        </div>
    </header>
                   
                
    <?php
                    include_once('conexao.php');
                    try{
                        $select = $conn->prepare('SELECT * FROM tb_usuario');
                        $select->execute();

                        while($row = $select->fetch())
                        {
                            echo "<p>";
                            echo "<br><b>CÓDIGO: </b>".$row['cd_usuario'];
                            echo "<br><b>NOME: </b>".$row['nm_usuario'];
                            echo "<br><b>NOME: </b>".$row['nm_email'];

                            echo "<br>"
                            ?>
                            <button id="mod" onclick="window.location.href='alterarUsuario.php?id=<?php echo $row['cd_usuario'];?>'">
                            Alterar
                        </button>

                        <button id="delete" onclick="window.location.href='excluirUsuario.php?id=<?php echo $row['cd_usuario'];?>'">
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