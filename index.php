<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Login</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<style type="text/css">
		#tamanho{
			width: 350px;
			-webkit-box-shadow: 10px 10px 28px 0px rgba(171,166,171,1);
			-moz-box-shadow: 10px 10px 28px 0px rgba(171,166,171,1);
			box-shadow: 10px 10px 28px 0px rgba(171,166,171,1);
		}
	</style>
</head>
<body>
	<div class="container" id="tamanho" style="margin-top: 100px;border-radius: 15px; border: 2px solid #f3f3f3;">
		<div style="padding: 10px;">
		<center>
			<img src="imagem/cadeado.png" width="125px" height="125px">
		</center>

		<form action="index1.php" method="post">
			<div class="form-group">
				<label>Usuário</label>
				<input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Senha</label>
				<input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
			</div>		
			<br>
			<div style="text-align: right;">
				<button type="submit" class="btn btn-sm btn-success">Entrar</button>
			</div>
		</form>
	</div>

	<div stule="margin-top: 10px">
		<center>
			<small>Você não possui cadastro? clique <a href="cadastro_usuario_externo.php">aqui</a></small>
		</center>
	</div>
	

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>