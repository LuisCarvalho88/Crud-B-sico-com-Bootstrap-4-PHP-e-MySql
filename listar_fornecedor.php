<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fornecedores</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/06f7e26479.js" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container" style="margin-top: 40px ; width: 700px;">
		<h3>Lista de Fornecedores</h3>
	</br>
		<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Nome Fornecedor</th>
	      <th scope="col">Ação</th>
	    </tr>
	  </thead>
	    
    	<?php 
	    	include 'conexao.php';
	    	$sql="SELECT * FROM `fornecedor`";
	    	$busca = mysqli_query($conexao,$sql);

	    	while($array = mysqli_fetch_array($busca)){

	    		$id_forn = $array['id_forn'];
	    		$nomefornecedor = $array['nome_fornecedor'];
    	 	?>
			<tr>
			    <td> <?php echo $nomefornecedor ?></td>

			    <td> 
			    	<a class="btn btn-warning btn-sm" style="color: #fff;" href="editar_fornecedor.php?id=<?php echo $id_usuario ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>
			    	<a class="btn btn-danger btn-sm" style="color: #fff;" href="deletar_fornecedor.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
			    </td>
			</tr>
			<?php } ?>
       
</table>
	<div style="text-align: right;">
		<a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
	</div>
</div>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>