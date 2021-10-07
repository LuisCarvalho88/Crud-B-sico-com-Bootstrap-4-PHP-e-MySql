<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listagem de Produtos</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/06f7e26479.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
session_start();

$usuario = $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

include 'conexao.php';

$sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status_usuario='Ativo'";
$buscar = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel_usuario'];

?>

<div class="container" style="margin-top: 40px ;">
	<h3>Lista de Produtos</h3>
</br>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Numero Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
    
    	<?php 
	    	include 'conexao.php';
	    	$sql="SELECT * FROM `estoque`";
	    	$busca = mysqli_query($conexao,$sql);

	    	while($array = mysqli_fetch_array($busca)){

	    		$id_estoque = $array['id_estoque'];
	    		$nroproduto = $array['nroproduto'];
	    		$nomeproduto = $array['nomeproduto'];
	    		$categoria = $array['categoria'];
	    		$quantidade = $array['quantidade'];
	    		$fornecedor = $array['fornecedor'];
    	 ?>
	<tr>
	    <td> <?php echo $nroproduto ?></td>

	    <td> <?php echo $nomeproduto ?></td>

	    <td> <?php echo $categoria ?></td>

	    <td> <?php echo $quantidade ?></td>

	    <td> <?php echo $fornecedor ?></td>

	    <td> 
	    	<?php

	  			if(($nivel == 1)||($nivel == 2)){

	  		?>
	    	<a class="btn btn-warning btn-sm" style="color: #fff;" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>
	    	<?php } ?>
	    	<?php

	  			if($nivel == 1){

	  		?>
	    	<a class="btn btn-danger btn-sm" style="color: #fff;" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
	    	<?php } ?>

	    </td>
	</tr>

      <?php } ?>
       
</table>
			<div style="text-align: right;">
				<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
			</div>
</div>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>