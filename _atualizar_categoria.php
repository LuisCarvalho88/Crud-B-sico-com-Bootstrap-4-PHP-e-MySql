<?php  

include 'conexao.php';

$id = $_POST['id'];
$nomecategoria = $_POST['nome_categoria'];

$sql = "UPDATE categoria SET nome_categoria = '$nomecategoria' WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao,$sql);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="container" style="width: 400px;">
	<center>
		<h3>Atualizado com sucesso!</h3>
		<div style="padding-top: 20px;">
			<a href="listar_categorias.php" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
		</center>		
	</div>
</div>