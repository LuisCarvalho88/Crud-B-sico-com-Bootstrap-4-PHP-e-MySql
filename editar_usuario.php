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
		<h4>Editar Usuários</h4>
		<form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
			<?php  

			$sql = "SELECT * FROM `usuarios` WHERE id_usuario = $id"; 
			$buscar = mysqli_query($conexao,$sql);

	    	while($array = mysqli_fetch_array($buscar)){

	    		$id_usuario = $array['id_usuario'];
	    		$nomeusuario = $array['nome_usuario'];
	    		$mailusuario = $array['mail_usuario'];
	    		$nivelusuario = $array['nivel_usuario'];
	    		$statususuario = $array['status_usuario'];

			?>
				<div class="form-group">
					<label>Nome</label>
					<input type="text" class="form-control" name="nome_usuario" value="<?php echo $nomeusuario ?>">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="mail_usuario" value="<?php echo $mailusuario ?>">
				</div>
				<div class="form-group">
					<label>Nivel</label>
					<select class="form-select" name="nivel" required>
						<?php  
						include 'conexao.php';
						$sql = "SELECT * FROM usuarios order by nivel_usuario asc";
						$buscar = mysqli_query($conexao,$sql);
						while($array = mysqli_fetch_array($buscar)){
							$id_usuario = $array['id_usuario'];
							$nivelusuario = $array['nivel_usuario'];

						?>
						<option><?php echo $nivelusuario ?></option>
						<?php } ?>
					</select>
				</div>			
				<div class="form-group">
					<label>Status</label>
					<select class="form-select" name="nivel" required>
						<?php  
						include 'conexao.php';
						$sql = "SELECT * FROM usuarios order by status_usuario asc";
						$buscar = mysqli_query($conexao,$sql);
						while($array = mysqli_fetch_array($buscar)){
							$id_usuario = $array['id_usuario'];
							$statususuario = $array['status_usuario'];

						?>
						<option><?php echo $statususuario ?></option>
						<?php } ?>
					</select>
				</div>
				<br>

				<div style="text-align: right;">
					<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
					<a href="listar_usuario.php" class="btn btn-sm btn-danger">Cancelar</a>
				</div>
			<?php } ?>
		</form>
	</div>	

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>