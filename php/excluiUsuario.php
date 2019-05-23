<?php
include("conexao.php");
//recebendo o ID para excluir
$id=$_POST['id'];
//montando o sql para "excluir" (mudar o status para 0)
$comando="UPDATE usuario SET ativoUsuario=0 WHERE  
idUsuario={$id}";

$resultado=mysqli_query($conexao,$comando);
if($resultado==true){
	echo "
	<script>
	alert('Usuário excluído com sucesso');
	location.href='formCadastraUsuario.php';
	</script>
	";
}else{
	echo "
	<script>
	alert('Não foi possível excluir o usuário');
	location.href='formCadastraUsuario.php';
	</script>
	";	
}





?>










