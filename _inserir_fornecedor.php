<?php 

include 'conexao.php';

$fornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO fornecedor (nome_fornecedor) VALUES ('$fornecedor')";
$inserir = mysqli_query($conexao,$sql);


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="container" style="width: 500px; margin-top: 20px;" >

	<center>
	<h4>Adicionado com sucesso!</h4>
	</center>
	<div style="padding-top: 20px;">
		<center>
			<a href="adicionar_fornecedor.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Fornecedor</a>
		</center>		
	</div>
</div>