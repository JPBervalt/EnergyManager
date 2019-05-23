<?php

include("connect.php");

$username=$_POST['username'];
$password=$_POST['password'];

$command="SELECT * FROM login WHERE username='{$username}' AND password='{$password}'";

$result=mysqli_query($conexao,$command);

$user=mysqli_fetch_assoc($result);

if($user==""){
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
	$_SESSION['username']=$username;
	
	header("Location: home.php");
}

?>