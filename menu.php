<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="text-align: right; margin-top: 40px; margin: 40px;">
		<a href="index.php" role="button" class="btn btn-sm btn-danger">Sair</a>
	</div>


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

<div class="container" style="margin-top: 80px;">
	<div class="row">

	  <?php

	  	if(($nivel == 1)||($nivel == 2)||($nivel == 3)){

	  ?>
	  <div class="col-sm-5">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Adicionar Produto</h5>
	        <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
	        <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produtos</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-5">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Lista de Produtos</h5>
	        <p class="card-text">Visualizar, editar e excluir os produtos</p>
	        <a href="listar_produtos.php" class="btn btn-primary">Lista de Produtos</a>
	      </div>
	    </div>
	  </div>
	<?php } ?>
	  <div class="col-sm-5" style="margin-top: 20px;">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Adicionar Categoria</h5>
	        <p class="card-text">Opção para adicionar categoria de produtos</p>
	        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-5" style="margin-top: 20px;">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Lista de Categorias</h5>
	        <p class="card-text">Visualizar, editar e excluir as categorias</p>
	        <a href="listar_categorias.php" class="btn btn-primary">Lista de Categorias</a>
	      </div>
	    </div>
	  </div>

	   <div class="col-sm-5" style="margin-top: 20px;">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Adicionar Fornecedor</h5>
	        <p class="card-text">Opção para adicionar fornecedores de produtos</p>
	        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
	      </div>
	    </div>
	  </div>	  
	  <div class="col-sm-5" style="margin-top: 20px;">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Lista de Fornecedores</h5>
	        <p class="card-text">Visualizar, editar e excluir Fornecedores</p>
	        <a href="listar_fornecedor.php" class="btn btn-primary">Lista de Fornecedores</a>
	      </div>
	    </div>
	  </div>

	   <div class="col-sm-5" style="margin-top: 20px;">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Aprovar Usuários</h5>
	        <p class="card-text">Aprovar Usuários Cadastrados</p>
	        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
	      </div>
	    </div>
	  </div>
	   <div class="col-sm-5" style="margin-top: 20px;">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Lista de Usuários</h5>
	        <p class="card-text">Visualizar, editar Usuários Cadastrados</p>
	        <a href="listar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
	      </div>
	    </div>
	  </div>

	  	   <div class="col-sm-5" style="margin-top: 20px;">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Inserir Usuário</h5>
	        <p class="card-text">Inserir novo Usuário</p>
	        <a href="cadastro_usuario.php" class="btn btn-primary">Inserir Usuário</a>
	      </div>
	    </div>
	  </div>
	   <!--<div class="col-sm-5" style="margin-top: 20px;">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Lista de Usuários</h5>
	        <p class="card-text">Visualizar, editar Usuários Cadastrados</p>
	        <a href="listar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
	      </div>
	    </div>
	  </div>-->

	</div>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>