<?php
	
	include("conexao.php");
	
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$senhaMD5=md5($senha);
	$tipo=$_POST['tipo'];
	
	$comando="INSERT INTO usuario (emailUsuario,senhaUsuario,tipoUsuario,ativoUsuario) 
	VALUES ('{$email}','{$senhaMD5}',{$tipo},1)";
	
	$resultado=mysqli_query($conexao,$comando);
	
	if($resultado==true){
		echo "
		<script>
			alert('Usuário cadastrado com sucesso!');
			location.href='formCadastraUsuario.php';
		</script>		
		";
	}else{
		echo "
		<script>
			alert('Erro ao cadastrar usuário!');
			location.href='formCadastraUsuario.php';
		</script>		
		";
	}
	
	
	
?>

