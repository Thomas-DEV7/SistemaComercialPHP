<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	    <script src="js/buscaCep.js"> </script>
		<script src="js/validaCPF.js"> </script>
		<title>SISTEMA COMERCIAL - ALTERAR CLIENTE</title>
		</script>
	</head>
	<body>

	<?php

		$cod = $_GET['id'];
		
		include_once('conexao.php');
		 
			$select = $conn->prepare("SELECT * FROM tb_cliente where cd_cliente=$cod");
			$select->execute();
		
			$row = $select->fetch();
			
	 ?>
		<form action="confirmaAlterarCliente.php" method="POST">

			<div class="container">
				<div class="row">

    				<div class="col">
      					<div class="mb-3">
      						<h1 class="bg-primary text-white">Alterar Cliente</h1>
				
							<label for="cname"><b>Código</b></label>
							<input type="text" class="form-control" name="codigo" value="<?php echo $row['cd_cliente'];?>" readonly="true">
							
							<label for="cname"><b>Nome</b></label>
							<input type="text" class="form-control" name="nome" value="<?php echo $row['nm_primeiro'];?>" required>
							
							<label for="cCPF"><b>CPF</b></label>
							<input type="text" placeholder="CPF do Cliente" class="form-control" name="cpf" required maxlength="11" value="<?php echo $row['nr_cpf'];?>"
							onkeypress='return event.charCode >= 48 && event.charCode <= 57'  
							onblur="alert(TestaCPF(this.value));">
							
							<label for="cRG"><b>RG</b></label>
							<input type="text" placeholder="RG do Cliente" class="form-control" name="rg" value="<?php echo $row['nr_rg'];?>" required>
							
							<label for="cCEP"><b>CEP</b></label>
							<input type="text" placeholder="CEP do Cliente" id="cep" class="form-control" name="cep" value="<?php echo $row['nr_cep'];?>"
								   onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
							<label for="cNumero"><b>Numero</b></label>
							<input type="text" class="form-control" name="numero" id="numero" value="<?php echo $row['nr_endereco'];?>" >
							
							<label for="cCel"><b>Celular</b></label>
							<input type="text" placeholder="Celular do Cliente" class="form-control" name="celular" value="<?php echo $row['nr_celular'];?>"  required>
							
							<label for="cEmail"><b>Email</b></label>
							<input type="text" placeholder="e-mail do Cliente" class="form-control" name="email" value="<?php echo $row['nm_email'];?>"  required>
							<label for="cEmail"><b>Sexo</b></label>
							<input type="text" placeholder="e-mail do Cliente" class="form-control" name="email" value="<?php echo $row['id_genero'];?>"  required>
							<br>	
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Atualizar</button>
								<button type="reset" class="btn btn-secondary" onclick="javascript: location.href='consultaCliente.php'">Voltar</button>
							</div>
						</div>
  					</div>

				</div>
			</div>
		</form>
	</body>
</html>
					
		

