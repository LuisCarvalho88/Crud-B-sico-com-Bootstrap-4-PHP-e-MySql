<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="container" style="width: 500px; margin-top: 20px;" >

	<center>
	<h3>Deletado com sucesso!</h3>
	<div style="padding-top: 20px;">
			<a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
	</div>
	</center>
</div>