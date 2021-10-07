<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aprovar Usuário</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/06f7e26479.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container" style="margin-top: 40px ;">
	<h3>Lista de Usuário para aprovação</h3>
</br>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nível </th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
    
    	<?php 
	    	include 'conexao.php';
	    	$sql= "SELECT * FROM usuarios WHERE status_usuario = 'Inativo'";
	    	$busca = mysqli_query($conexao,$sql);

	    	while($array = mysqli_fetch_array($busca)) {

	    		$id_usuario = $array['id_usuario'];
	    		$nomeusuario = $array['nome_usuario'];
	    		$mail = $array['mail_usuario'];
	    		$nivel = $array['nivel_usuario']

    	  	?>
				<tr>
			    <td> <?php echo $nomeusuario ?></td>
			    <td> <?php echo $mail ?></td>
			    <td> <?php echo $nivel ?></td>
			    
			    <!--BLOCO PARA RETORNAR O NIVEL DO USUARIO MANUAL-->
			    <!--<td>
			    	<form action='' method="post">
			    		<div class="form-group">
								
								<select name="nivelusuario" class="form-control">

									<option value="1">Administrador</option> <!-- Leitura e Gravação e Exclusão/ acesso total-->
									<!--<option value="2">Funcionário</option> <!-- Leitura e Gravação / consegue editar-->
									<!--<option value="3">Conferente</option> <!-- Só Leitura-->
								<!--</select>
							</div>
						</form>
			    </td>-->

			    <td> 
			    	<a class="btn btn-success btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=1" role="button"><i class="far fa-smile-beam"></i>&nbsp;Administrador</a>
			    	<a class="btn btn-warning btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel= 2" role="button"><i class="far fa-smile-beam"></i>&nbsp;Funcionário</a>
			    	<a class="btn btn-dark btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel= 3" role="button"><i class="far fa-smile-beam"></i>&nbsp;Conferente</a>

			    	<a class="btn btn-danger btn-sm" style="color: #fff;" href="_deletar_usuario.php?id=<?php echo $id_usuario ?> &nivel=<?php echo $nivel ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
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