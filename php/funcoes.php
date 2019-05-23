<?php
//Arquivo de conexão com o banco de dados

//Função que retorna as datas para montar o gráfico (eixo X)
function retornaDatas(){
	include("conexao.php");
	//Trazer todas as datas existentes na tabela 
	date_default_timezone_set('America/Sao_Paulo');
	$date = date('Y-m');
	$comando = "SELECT substring(dataHora,9,2) as dias FROM dados WHERE dataHora LIKE '{$date}%' GROUP BY dias";
	//Executar o comando no banco
	$resultado= mysqli_query($conexao,$comando);
	//Criar um array para armazenar as datas que vierem, pode ser mais de uma
	$arrayDeDatas = array();
	//Preenchendo o valor com cada data retornada do banco	
	while ($guardaDatas = mysqli_fetch_assoc($resultado)){
		array_push($arrayDeDatas,$guardaDatas);
	}
	/*Criando uma string $datas que vai concatenar cada data retornada no banco para passar para o gráfico, na 
	propriedade data. Os valores tem que ser passados no seguinte formato:
	["valor","valor2","valor3"]. Por enquanto, a string não recebe null. Ela deve ser
	criada antes do foreach pois caso seja criada apenas dentro dele, ela não seria uma variável global, seria local,
	e somente é visível dentro do foreach
	*/
	$datas = null;
	//Preenchendo a variável datas com os valores retornados do banco
	foreach ($arrayDeDatas as $cadaData){
	// " + 2017-08-09 + " + , + o que já tem na variável datas, para não ficar apenas com a última data encontrada na string
		$datas='"'.$cadaData['dias'].'"'.','.$datas;
	}
	//Apenas removendo a última vírgula que foi concatenada no foreach, pois se temos vírgula sem valor, da erro
	$datas = substr($datas,0,-1);
	//Retornando a string datas, já nesse formato: "2017-08-09","2017-08-08","2017-08-07" por exemplo
	return $datas;
	
}
/*As funções abaixo retornam os valores de cada sensor, note que temos uma função para cada sensor. 

*/

function retornaValoresSensor1(){
	include("conexao.php");
	
	date_default_timezone_set('America/Sao_Paulo');
	$date = date('Y-m');
	
	$comando = "SELECT AVG(sensor1) as valor, substring(dataHora,9,2) as hora FROM dados WHERE dataHora LIKE '{$date}%' 
	GROUP BY hora";
	$resultado= mysqli_query($conexao,$comando);
	$arraySensor1 = array();
	
	
	while ($guardaSensor1 = mysqli_fetch_assoc($resultado)){
		array_push($arraySensor1,$guardaSensor1);
	}
	
	$sensor1 = mysqli_fetch_assoc($resultado);
	
	foreach ($arraySensor1 as $cadaSensor1){
		$sensor1='"'.$cadaSensor1['valor'].'"'.','.$sensor1;
	}
	
	$sensor1 = substr($sensor1,0,-1);
	return $sensor1;
}


function retornatotal(){
	include("conexao.php");
	
	date_default_timezone_set('America/Sao_Paulo');
	$dataAtual = date('Y-m');
	
	$comando="SELECT AVG(sensor1) as valor, substring(dataHora,12,2) as hora FROM dados WHERE dataHora LIKE '{$dataAtual}%' GROUP BY hora";
	$resultado=mysqli_query($conexao,$comando);
	
	$arrayDeValores = array();
	
	while ($guardaValores = mysqli_fetch_assoc($resultado)){
		array_push($arrayDeValores,$guardaValores);
	}
	
	$valortotal=0;
	
	foreach ($arrayDeValores as $cadaValor){
	
		$valortotal=$cadaValor['valor']+$valortotal;
	}
	
	$valortotal=number_format($valortotal,2);
	
	return $valortotal;
	
}





function retornaKw(){
	include("conexao.php");
	date_default_timezone_set('America/Sao_Paulo');
	$date = date('Y-m');
	$comando="SELECT AVG(sensor1) as valor FROM dados where dataHora LIKE '{$date}%'";
	$resultado=mysqli_query($conexao,$comando);
	$kw=mysqli_fetch_assoc($resultado);
	$kw=$kw['valor'];
	
	$kws=($kw*60*220)/1000;
	
	$kws=number_format($kws,2);
	return $kws;
	
}

function retornaRS(){  
	include("conexao.php");
	
	date_default_timezone_set('America/Sao_Paulo');
	$date = date('Y-m');
	$comando="SELECT AVG(sensor1) as valor FROM dados where dataHora LIKE '{$date}%'";
	$resultado=mysqli_query($conexao,$comando);
	$kw=mysqli_fetch_assoc($resultado);
	$kw=$kw['valor'];
	//$kw=(((($kw*220)/1000))*0.000027);
	$kw=($kw*60*220)/1000;
	$kw=number_format($kw,2);
	
	$comando2="SELECT valorkwh FROM configuracao";
	$resultado2=mysqli_query($conexao,$comando2);
	$kwrs=mysqli_fetch_assoc($resultado2);
	$kwrs=$kwrs['valorkwh'];
	$kwrs2=$kwrs*$kw;
	
	$kwrs2=number_format($kwrs2,2);
	
	
	
	
	
	
	return $kwrs2;
	
	
}

function retornaValorKwh(){  
	include("conexao.php");
	
	$comando="SELECT valorkwh FROM configuracao";
	$resultado=mysqli_query($conexao,$comando);
	$valorkw=mysqli_fetch_assoc($resultado);
	$valorkw=$valorkw['valorkwh'];
	$valorkw=number_format($valorkw,2);
	
	return $valorkw;
}

?>