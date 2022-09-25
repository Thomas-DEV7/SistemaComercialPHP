<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	    <script src="js/buscaCep.js"> </script>
		<script src="js/validaCPF.js"> </script>
		<title>SISTEMA COMERCIAL - ALTERAR Usuario</title>
		</script>
	</head>
	<body>

	<?php

		$cod = $_GET['id'];
		
		include_once('conexao.php');
		 
			$select = $conn->prepare("SELECT * FROM tb_Usuario where cd_Usuario=$cod");
			$select->execute();
		
			$row = $select->fetch();
			
	 ?>
		<form action="confirmaAlterarUsuario.php" method="POST">

			<div class="container">
				<div class="row">

    				<div class="col">
      					<div class="mb-3">
      						<h1 class="bg-primary text-white">Alterar Usuario</h1>
				
							<label for="cname"><b>Código</b></label>
							<input type="text" class="form-control" name="codigo" value="<?php echo $row['cd_usuario'];?>" readonly="true">
							
							<label for="cname"><b>Nome</b></label>
							<input type="text" class="form-control" name="nome" value="<?php echo $row['nm_usuario'];?>" required>
							
							<label for="cCPF"><b>cpf</b></label>
							<input type="text" placeholder="CPF do Usuario" class="form-control" name="email" required maxlength="11" value="<?php echo $row['nm_email'];?>"
							onkeypress='return event.charCode >= 48 && event.charCode <= 57'  
							onblur="alert(TestaCPF(this.value));">

							<label for="cRG"><b>senha</b></label>
							<input type="text" placeholder="RG do Usuario" class="form-control" name="senha" value="<?php echo $row['nm_senha'];?>" required>
							<br>	
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Atualizar</button>
								<button type="reset" class="btn btn-secondary" onclick="javascript: location.href='consultaUsuario.php'">Voltar</button>
							</div>
						</div>
  					</div>

				</div>
			</div>
		</form>
	</body>
</html>
					
		

