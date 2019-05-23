<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form name="cadastroConfig" action="cadstroConfig.php" method="POST">
<?php

$valor=$_POST['valor'];
$erro= 0;

if (empty($valor)){
	 echo "O campo está em branco";
	 "<script>location.href='../php/cadastroConfig.php';</script>"
	 $erro = 1;
}

if ($erro == 0){
	"<script>alert='Cadastro concluido com sucesso'</script>"
	include 'insereConfig.php'
}


?>