<?php

include("conexao.php");

$valor=$_POST['valor'];
$erro = 0;

if ($valor==""){
	echo "<script>alert('O valor digitado está em branco!');
	location.href='../php/cadastroConfig.php';
	</script>
	";
	$erro =1;
}
elseif ($valor > 0.8) {
	$erro = 1;
} elseif ($valor < 0.3) {
	$erro = 1;
}

if ($erro==0){
	echo"<script>alert('Valor alterado com sucesso!');
	location.href='../php/cadastroConfig.php';
	</script>";
	$comando="UPDATE configuracao SET valorkwh = ('{$valor}') WHERE idconfig=1";
	$resultado=mysqli_query($conexao,$comando);
}
else{
	echo"
	<script>
	alert('O valor digitado é inválido!');
	location.href='../php/cadastroConfig.php';
	</script>";
}
?>

