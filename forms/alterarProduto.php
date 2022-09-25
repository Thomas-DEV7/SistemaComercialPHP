<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	    <script src="js/buscaCep.js"> </script>
		<script src="js/validaCPF.js"> </script>
		<title>SISTEMA COMERCIAL - ALTERAR Produto</title>
		</script>
	</head>
	<body>

	<?php

		$cod = $_GET['id'];
		
		include_once('conexao.php');
		 
			$select = $conn->prepare("SELECT * FROM tb_Produto where cd_Produto=$cod");
			$select->execute();
		
			$row = $select->fetch();
			
	 ?>
		<form action="confirmaAlterarProduto.php" method="POST">

			<div class="container">
				<div class="row">

    				<div class="col">
      					<div class="mb-3">
      						<h1 class="bg-primary text-white">Alterar Produto</h1>
				
							<label for="cname"><b>Código</b></label>
							<input type="text" class="form-control" name="codigo" value="<?php echo $row['cd_produto'];?>" readonly="true">
							
							<label for="cname"><b>Nome</b></label>
							<input type="text" class="form-control" name="nome" value="<?php echo $row['nm_produto'];?>" required>
							
							<label for="cCPF"><b>categoia</b></label>
							<input type="text" placeholder="CPF do Produto" class="form-control" name="cat" required maxlength="11" value="<?php echo $row['nm_categoria'];?>"
							onkeypress='return event.charCode >= 48 && event.charCode <= 57'  
							onblur="alert(TestaCPF(this.value));">
							
							<label for="cRG"><b>Valor(R$):</b></label>
							<input type="text" placeholder="RG do Produto" class="form-control" name="valor" value="<?php echo $row['vl_produto'];?>" required>
							
							<label for="cCEP"><b>Estoque</b></label>
							<input type="text" placeholder="CEP do Produto" id="cep" class="form-control" name="estoque" value="<?php echo $row['qt_produto'];?>"
								   onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
							<label for="cNumero"><b>EMPRESA</b></label>
							<input type="text" class="form-control" name="empresa" id="numero" value="<?php echo $row['nm_empresa'];?>" >
							
							<label for="cCel"><b>CNPJ da empresa:</b></label>
							<input type="text" class="form-control" name="cnpj" value="<?php echo $row['nr_cnpj'];?>"  required>
							<br>	
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Atualizar</button>
								<button type="reset" class="btn btn-secondary" onclick="javascript: location.href='consultaProduto.php'">Voltar</button>
							</div>
						</div>
  					</div>

				</div>
			</div>
		</form>
	</body>
</html>
					
		

