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
		<h4>Formulário de Edição</h4>
		<form action="_atualizar_categoria.php" method="post" style="margin-top: 20px">
			<?php  

			$sql = "SELECT * FROM `categoria` WHERE id_categoria = $id"; 
			$buscar = mysqli_query($conexao,$sql);

	    	while($array = mysqli_fetch_array($buscar)){

	    		$id_categoria = $array['id_categoria'];
	    		$nome_categoria = $array['nome_categoria'];

			?>
			<div class="form-group">
				<label>Nome Categoria</label>
				<input type="text" class="form-control" name="nome_categoria" value="<?php echo $nome_categoria ?>">
				<input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display: none;">
			</div>
			</br>
			<div style="text-align: right;">
				<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
			</div>
		<?php } ?>
		</form>
	</div>	

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>