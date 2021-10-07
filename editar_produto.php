<?php  

include 'conexao.php';

$id = $_GET['id'];

?>
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
		<form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
			<?php  

			$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id"; 
			$buscar = mysqli_query($conexao,$sql);

	    	while($array = mysqli_fetch_array($buscar)){

	    		$id_estoque = $array['id_estoque'];
	    		$nroproduto = $array['nroproduto'];
	    		$nomeproduto = $array['nomeproduto'];
	    		$categoria = $array['categoria'];
	    		$quantidade = $array['quantidade'];
	    		$fornecedor = $array['fornecedor'];

			?>
			<div class="form-group">
				<label>Nro Produto</label>
				<input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
				<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
			</div>
			<div class="form-group">
				<label>Nome Produto</label>
				<input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
			</div>
			<div class="form-group">
				<label>Categoria</label>
				<select class="form-select" name="categoria">
					<option>Periféricos</option>
					<option>Hardware</option>
					<option>Software</option>
					<option>Celulares</option>
				</select>
			</div>		
			<div class="form-group">
				<label>Quantidade</label>
				<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
			</div>
			<div class="form-group">
				<label>Fornecedor</label>
				<select class="form-select" name="fornecedor">
					<option>Fornecedor A</option>
					<option>Fornecedor B</option>
					<option>Fornecedor C</option>
					<option>Fornecedor D</option>

				</select>
			</div><br>
			<div style="text-align: right;">
				<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
	     	    <a href="listar_produtos.php" class="btn btn-sm btn-danger">Cancelar</a>				
			</div>
		<?php } ?>
		</form>
	</div>	

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>