<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

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
		<h4>Cadastrar Categoria</h4>
		<form action="_inserir_categoria.php" method="post" style="margin-top: 20px">
			<div class="form-group">
				<!--<label>Categoria</label>-->
				<input type="text" class="form-control" name="categoria" placeholder="Digite o nome da Categoria" required autocomplete="off">
			</div>				
			<br>
			<div style="text-align: right;">
				<button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
				<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
			</div>
			
		</form>	

	</div>	
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>