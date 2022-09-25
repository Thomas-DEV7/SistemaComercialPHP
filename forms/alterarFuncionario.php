<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	    <script src="js/buscaCep.js"> </script>
		<script src="js/validaCPF.js"> </script>
		<title>SISTEMA COMERCIAL - ALTERAR Funcionario</title>
		</script>
	</head>
	<body>

	<?php

		$cod = $_GET['id'];
		
		include_once('conexao.php');
		 
			$select = $conn->prepare("SELECT * FROM tb_Funcionario where cd_funcionario=$cod");
			$select->execute();
		
			$row = $select->fetch();
			
	 ?>
		<form action="confirmaAlterarFuncionario.php" method="POST">

			<div class="container">
				<div class="row">

    				<div class="col">
      					<div class="mb-3">
      						<h1 class="bg-primary text-white">Alterar Funcionario</h1>
				
							<label for="cname"><b>Código</b></label>
							<input type="text" class="form-control" name="codigo" value="<?php echo $row['cd_funcionario'];?>" readonly="true">
							
							<label for="cname"><b>Nome</b></label>
							<input type="text" class="form-control" name="nome" value="<?php echo $row['nm_primeiro'];?>" required>
							
							<label for="cCPF"><b>cpf</b></label>
							<input type="text" placeholder="CPF do Funcionario" class="form-control" name="cpf" required maxlength="11" value="<?php echo $row['nr_cpf'];?>"
							onkeypress='return event.charCode >= 48 && event.charCode <= 57'  
							onblur="alert(TestaCPF(this.value));">
							
							<label for="cRG"><b>Pais</b></label>
							<input type="text" placeholder="RG do Funcionario" class="form-control" name="pais" value="<?php echo $row['nm_pais'];?>" required>
							
							<label for="cCEP"><b>CEP</b></label>
							<input type="text" placeholder="CEP do Funcionario" id="cep" class="form-control" name="cep" value="<?php echo $row['nr_cep'];?>"
								   onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
							<label for="cNumero"><b>Numero</b></label>
							<input type="text" class="form-control" name="numero" id="numero" value="<?php echo $row['nr_endereco'];?>" >
							
							<label for="cCel"><b>Celular</b></label>
							<input type="text" placeholder="Celular do Funcionario" class="form-control" name="celular" value="<?php echo $row['nr_celular'];?>"  required>
							
							<label for="cEmail"><b>Email</b></label>
							<input type="text" placeholder="e-mail do Funcionario" class="form-control" name="email" value="<?php echo $row['nm_email'];?>"  required>
							<label for="cEmail"><b>Sexo</b></label>
							<input type="text" placeholder="e-mail do Funcionario" class="form-control" name="email" value="<?php echo $row['id_genero'];?>"  required>
							<br>	
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Atualizar</button>
								<button type="reset" class="btn btn-secondary" onclick="javascript: location.href='consultaFuncionario.php'">Voltar</button>
							</div>
						</div>
  					</div>

				</div>
			</div>
		</form>
	</body>
</html>
					
		

