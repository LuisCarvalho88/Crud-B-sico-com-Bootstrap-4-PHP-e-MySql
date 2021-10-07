<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Meu Primeiro Script</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	<style type="text/css">

		#tamanhoContainer{
			width: 500px;
		}

		#botao{
			background-color: #FF1168;
			color: #ffffff;
			font-weight: bold;
		}

	</style>

</head>

<body>
	<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
		<h4>Formulário de Cadastro</h4>
		<form action="_inserir_produto.php" method="post" style="margin-top: 20px">
			<div class="form-group">
				<label>Nro Produto</label>
				<input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do produto" required autocomplete="off">
			</div>
			<div class="form-group">
				<label>Nome Produto</label>
				<input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" required autocomplete="off">
			</div>
			<div class="form-group">
				<label>Categoria</label>
				<select class="form-select" name="categoria" required>
					<?php  
					include 'conexao.php';
					$sql = "SELECT * FROM categoria order by nome_categoria asc";
					$buscar = mysqli_query($conexao,$sql);
					while($array = mysqli_fetch_array($buscar)){
						$id_categoria = $array['id_categoria'];
						$nome_categoria = $array['nome_categoria'];

					?>
					<option><?php echo $nome_categoria ?></option>
					<?php } ?>
				</select>
			</div>		
			<div class="form-group">
				<label>Quantidade</label>
				<input type="number" class="form-control" name="quantidade" placeholder="Insira o numero do Quantidade" required autocomplete="off">
			</div>
			<div class="form-group">
				<label>Fornecedor</label>
				<select class="form-select" name="fornecedor" required>
					<?php  
					include 'conexao.php';
					$sql2 = "SELECT * FROM fornecedor order by nome_fornecedor asc";
					$buscar2 = mysqli_query($conexao,$sql2);
					while($array2 = mysqli_fetch_array($buscar2)){
						$id_fornecedor = $array2['id_fornecedor'];
						$nome_fornecedor = $array2['nome_fornecedor'];

					?>
					<option><?php echo $nome_fornecedor ?></option>
					<?php } ?>f

				</select>
			</div><br>
			<div style="text-align: right;">
				<button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
				<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
			</div>
			
		</form>	

	</div>	

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>