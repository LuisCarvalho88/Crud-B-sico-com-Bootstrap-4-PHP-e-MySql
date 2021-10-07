<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	
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
	<div class="container" style="margin-top: 100px;border-radius: 15px; border: 2px solid #f3f3f3;" id="tamanho">
		<div style="padding: 10px;">
		<center><h4 style="color:blue;">Cadastro de Usuário</h4></center>		
		<form action="insert_usuario.php" method="post">
			<div class="form-group">
				<label>Nome Usuário</label>
				<input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome">
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="text" name="emailusuario" class="form-control" required autocomplete="off" placeholder="E-mail">
			</div>
			<div class="form-group">
				<label>Senha do Usuário</label>
				<input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
			</div>
			<div class="form-group">
				<label>Repetir Senha</label>
				<input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repetir Senha" oninput="validaSenha(this)">
				<small>Precisa ser igual a senha digitada acima</small>
			</div>
			<div class="form-group">
				<label>Nível de Acesso</label>
				<select name="nivelusuario" class="form-control">
					<option value="1">Administrador</option> <!-- Leitura e Gravação e Exclusão/ acesso total-->
					<option value="2">Funcionário</option> <!-- Leitura e Gravação / consegue editar-->
					<option value="3">Conferente</option> <!-- Só Leitura-->
				</select>
			</div>
			<br>
			<div style="text-align: right">
				<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
				<a href="menu.php" role="button" class="btn btn-sm btn-success">Voltar</a>
			</div>
		</form>
	</div>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

	<script>
		function validaSenha (input){ 
			if (input.value != document.getElementById('txtSenha').value) {
		    input.setCustomValidity('Repita a senha corretamente');
		  } else {
		    input.setCustomValidity('');
		  }
		} 
	</script>
</body>
</html>