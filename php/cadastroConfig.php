<?php 

include ('conexao.php');
include ('cabecalhoMenu.php');

?>
<html>
<link rel="stylesheet" href="../css/cadastroConfig.css">
<body>
<form name="cadastroConfig" action="insereConfig.php" method="POST">
<div id="divcentral">
	<label id="titulo">Valor kW/h: </label>
	<input name="valor" placeholder="Min=0.3 / Max=0.8" type="float" class="inputs" ></input>
	<button type="submit" id="botao" name="enviar">
		<img src="../img/alterar.png">
	</button>
</div>
<p id="aviso">*Os valores obrigatoriamente tem que ser digitados no formato a seguir. Ex:(0.50)</p>
</form>
</body>
</html>


