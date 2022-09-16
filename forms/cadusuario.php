<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>CADASTRO USUARIO</title>

</head>

<body>
<header>
  <h1>Cadastro de usuario </h1>
</header>
  <form action="" method="post">
    <div class="linha">
      <p>Nome do usuario: <strong>*</strong></p>
      <input type="text" name="usuario" required/>
    </div>
    <div class="linha">
      <p>email: <strong>*</strong></p>
      <input type="text" name="email" required/>
    </div>
    <div class="linha">
      <p>Senha: <strong>*</strong></p>
      <input type="text" name="senha" maxlength="11" required/>
    </div>
    <div class="linha">
      <input type="submit" value="Submit" id="btn"/>
    </div>

  </form>
  </div>
  <?php

  if (!empty($_POST)) {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    include_once('conexao.php');

    try {
      $stmt = $conn->prepare("INSERT INTO tb_usuario (nm_usuario,
                                                      nm_email,
                                                      nm_senha)
      )
            VALUES (:nome, :email, :senha)");

      $stmt->bindParam(':nome', $usuario);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':senha', $senha);


      $stmt->execute();

      echo "<script>alert('Cadastrado com Sucesso');</script>";
    } catch (PDOException $e) {
      echo "Erro ao cadastrar: " . $e->getMessage();
    }
    $connection = null;
  }

  ?>