<?php
include("conexao.php");

$id=$_POST['idEscondido'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$senhaMD5=md5($senha);
$tipo=$_POST['tipo'];

//Se veio alguma senha, ela deve ser alterada no banco
if($senha==""){
	$comando="UPDATE usuario SET 
	emailUsuario='{$email}', 
	tipoUsuario={$tipo} WHERE 
	idUsuario={$id}";
//Se não veio senha, não alteramos esse campo no banco
}else{
	$comando="UPDATE usuario SET 
	emailUsuario='{$email}', 
	tipoUsuario={$tipo},
	senhaUsuario='{$senhaMD5}' 
	WHERE 	idUsuario={$id}";
}
$resultado=mysqli_query($conexao,$comando);
if($resultado==true){

	echo "<script>
			alert('Edição realizada com sucesso!');
			location.href='formCadastraUsuario.php';
		 </script>" ;
}else{

	echo "<script>
			alert('Falha ao realizar edição');
			location.href='formCadastraUsuario.php';
		 </script>"; 
}










?>