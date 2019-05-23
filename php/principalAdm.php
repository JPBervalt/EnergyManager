<?php

include("cabecalhoMenu.php");
include("funcoes.php");

?>


<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Home ADM</title>
<link rel="stylesheet" href="../css/principalAdm.css">

</head>

<body>
<div id="gastotot">
    <h1 id="gastotit"><span id="spangasto">Gasto Total</span></h1>
	<p align="center" id="contGasto"><?php
	
	echo "R$ ".retornatotal();
	?></p>
</div>
<div id="gastors">
    <h1 id="gastotit"><span id="spangasto">Gasto atual por hora(R$/H)</span></h1>
	<p align="center" id="contGasto"><?php
	
	echo "R$ ".retornaRS();
	?></p>
</div>
<div id="gastors">
    <h1 id="gastotit"><span id="spangasto">KiloWatts/H</span></h1>
	<p align="center" id="contGasto"><?php
	
	echo "Kw/h ".retornaKw();
	?></p>
</div>
<div id="precokwh">
		<h1 id="gastotit"><span>Preço do kWh</span></h1>
		<p id="retornaValorKwh" align="center"><?php echo "R$  ".retornaValorKwh();?></p>

		
</div>
</body>

