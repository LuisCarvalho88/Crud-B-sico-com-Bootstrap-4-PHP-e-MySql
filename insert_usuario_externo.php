<?php

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
//$nivel = $_POST['nivelusuario'];
$status_usuario = 'Inativo';

$sql = "INSERT INTO usuarios (nome_usuario,mail_usuario, senha_usuario,status_usuario) VALUES ('$nomeusuario','$mail',sha1('$senha'),'$status_usuario')";

$inserir = mysqli_query($conexao, $sql);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="container" style="width: 500px; margin-top: 20px;" >

	<center>
	<h4>Usuário adicionado com sucesso!</h4>
	<h2>Aguardando aprovação</h2>
	</center>
	<div style="padding-top: 10px;">
		<center>
			<a href="cadastro_usuario_externo.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Usuário</a>
		</center>		
	</div>
</div>