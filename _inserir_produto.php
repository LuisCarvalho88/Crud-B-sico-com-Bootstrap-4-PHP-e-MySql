<?php 

include 'conexao.php';

$nroproduto = $_POST['nroproduto']; //recebe o valor do atributo
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO `estoque`(`nroproduto`,`nomeproduto`,`categoria`,`quantidade`,`fornecedor`) 
        VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";
$inserir = mysqli_query($conexao,$sql);

//echo $nomeproduto;

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="container" style="width: 500px; margin-top: 20px;" >

	<center>
	<h4>Produto Adicionado com sucesso!</h4>
	</center>
	<div style="padding-top: 20px;">
		<center>
			<a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Item</a>
		</center>		
	</div>
</div>