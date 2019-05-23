<?php
include("cabecalhoMenu.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exemplo de gráfico de Pizza</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js"></script>
</head>

<body>

<canvas class="line-chart"></canvas>


<script>
var ctx = document.getElementsByClassName("line-chart");
//Tipo, dados e opções

var chartGraph = new Chart(ctx, {

	type: 'line',
	data: {
		labels: ["Jan", "Fev","Mar","Abr","Mai",
		"Jun","Jul","Ago","Set","Out","Nov","Dez"],
		
		datasets: [
		
		{		
		label: "Sensor 01",
		data: [10,5,10,5,14,20,90,23,6,14,5,10],
		borderWidth: 6,
		borderColor: 'blue',
		backgroundColor: 'transparent',
		},
		
		{
		label: "Sensor 02",
		data: [10,20,10,5,14,20,90,85,6,14,5,1],
		borderWidth: 6,
		borderColor: 'red',
		backgroundColor: 'transparent',
		},
		
		{
		label: "Sensor 03",
		data: [52,25,10,17,14,20,9,85,6,14,19,1],
		borderWidth: 6,
		borderColor: 'black',
		backgroundColor: 'transparent',
		}
		
		
				]
		
	}
});
</script>


</body>
</html>