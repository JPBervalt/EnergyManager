<?php
include("protecaoLogin.php");
$recebeRetornoLogado = protecaoLogin();
if($recebeRetornoLogado==true){

?>

<!DOCTYPE html>
<head>
	<title>:::Bem Vindo:::</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/cabecalhoMenu.css">
</head>

<body>
<img id="logo" src="../img/lampada.png">
<a href="../php/logout.php"><img id="logout" class="barra" src="../img/logout.png"></a>
<a href="../php/cadastroConfig.php"><img id="configs" class="barra" src="../img/configs.png"></a>


<header>
	<div id="lista">
		<ul>
			<li class="itens">
			<a href="../php/principalAdm.php">Home</a>
			</li>
			<li class="itens">
			<a href="../php/graficoDinamico.php">Médias de Consumo</a>
			</li>
			<li class="itens">
			<a href="../php/dicasEconomia.php">Dicas de Economia</a>
			</li>
			<li class="itens">
			<a href="../php/formCadastraUsuario.php">Usuário</a>
			</li>
			<li class="itens">
			<a href="../php/faleConosco.php">Fale Conosco</a>
			</li>
		</ul>
	</div>
</header>
<?php

}else{
	echo "<script> 
	alert('Você não pode acessar essa página');
	location.href='../index.html';
	</script>
	";
}
?>