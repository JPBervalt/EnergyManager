<?php

include("conexao.php");

$email=$_POST['email'];
$senha=$_POST['senha'];

$senhaMD5=md5($senha);

$comando="SELECT*FROM usuario WHERE loginUsuario='{$email}' AND senhaUsuario='{$senhaMD5}' AND ativoUsuario=1 ";

//executar no banco de dados o comando
$resultado=mysqli_query($conexao,$comando);
//organizar o retorno do banco de dados
$usuario=mysqli_fetch_assoc($resultado);

if($usuario==""){
	echo "
	<script>
	alert('Usuário ou senha inválidos!');
	location.href='../index.html';
	</script>
	";
}else{
	//abro a sessao
	session_start();
	//crio uma variavel de sessao chamada email
	$_SESSION['email']=$email;
	
	if($usuario['tipoUsuario']==1){
		//redirecionando para principalAdm.php
		header("Location: principalAdm.php");
	}else if($usuario['tipoUsuario']==2){
		header("Location: principalComum.php");
	}
}


/*echo "E-mail:".$email;
echo "Senha:".$senha;*/

?>