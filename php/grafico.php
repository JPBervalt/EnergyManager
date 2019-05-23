<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exemplo de gráfico de Linha</title>
	<!--Javascript que contém as funções prontas dos gráficos -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js">
	</script>
</head>

<body>
<!-- Tag canvas para que o desenho do gráfico possa ser exibido -->
<canvas id="grafico"></canvas>

<?php
include("php/funcoes.php");
?>


<script>
//Captura o elemento canvas, com id "grafico" e guarda na variável mostraGrafico
var mostraGrafico = document.getElementById("grafico");
//Cria um novo objeto do tipo Chart (gráfico) e passa como parâmetro o mostraGrafico (área onde ele será exibido)
//e define as configurações
var chartGraph = new Chart(mostraGrafico, {
	
	/*
	Para criar um gráfico temos duas sessões: 
	TYPE - tipo do gráfico
	DATA - dados do gráfico e dentro dessa sessão, temos outras como:
		LABELS - O eixo X*
		DATASET - cada dataset é uma linha do gráfico, ou seja, um sensor. Dentro de cada dataset,
		temos as configurações para cada um deles (label,data,borderWidth,borderColor e backgroundColor)
	*/
	
	
//-------------------SESSÃO TYPE: Indica o tipo de gráfico - de linha
	type: 'line',
//-------------------SESSÃO DATA: Início da configuração do gráfico
	data: {
//-------------------Configuração do eixo X
		labels: [<?php echo retornaDatas(); ?>],
//-------------------Cada dataset é uma linha do gráfico, ou seja, corresponde a cada sensor		
		datasets: [ // Início dos datasets
//-------------------Configuração da primeira linha do gráfico (primeiro sensor)		
		{	//Início do primeiro dataset (Sensor 1)
//Nome da linha - Sensor 01
				label: "Sensor 01",
//Dados dessa linha: os valores do sensor que foram capurados 
//(ver no arquivo funcoes.php o que essa função retornaValoresSensor1() devolve como retorno)
				data: [<?php echo retornaValoresSensor1();?>],
//Largura da borda da linha
				borderWidth: 6,
//Cor da borda 
				borderColor: 'blue',
//Cor de fundo da linha (teste outra cor para entender melhor)
				backgroundColor: 'transparent',
		}, //Fim do primeiro dataset (Sensor 1)
//Segundo sensor, segue as mesmas configurações do anterior	
	
			{
			label: "Sensor 02",
			data: [<?php echo retornaValoresSensor2();?>],
			borderWidth: 6,
			borderColor: 'red',
			backgroundColor: 'transparent',
			},
			
			{
			label: "Sensor 03",
			data: [<?php echo retornaValoresSensor3();?>],
			borderWidth: 6,
			borderColor: 'black',
			backgroundColor: 'transparent',
			}
		
		
				] // Fim dos datasets
		
	}//-------------------------Fim da sessão data
});//---------------------------Fim do gráfico
</script>



</body>
</html>