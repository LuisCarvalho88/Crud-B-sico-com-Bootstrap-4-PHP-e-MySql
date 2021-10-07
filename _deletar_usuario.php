<?php  

include 'conexao.php';

$id = $_GET['id'];

$delete = "DELETE FROM usuarios WHERE id_usuario=$id";
$fila = mysqli_query($conexao,$delete);

header("location: aprovar_usuario.php"); //redireciona novamente para a tela de aprovação

?>