<?php  

include 'conexao.php';

$id = $_POST['id'];
//$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`= $quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao,$sql);


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="container" style="width: 500px; margin-top: 20px;" >

	<center>
	<h3>Atualizado com sucesso!</h3>
	</center>
	<div style="padding-top: 20px;">
		<center>
			<a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
		</center>		
	</div>
</div>