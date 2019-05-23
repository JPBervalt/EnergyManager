<!DOCTYPE html>
<html lang="pt-br">
<head>
<title> Relatório em tabela</title>
</head>
<body>
<h1>Relatório por data - Sensores</h1>

<form action="#" method="GET">
	<table>
		<tr>
			<td><label>Data inicial</label></td>
			<td><input type="date" name="dataInicial" required>
		</tr>
		
		<tr>
			<td><label>Data final</label></td>
			<td><input type="date" name="dataFinal" required>
		</tr>
		
		<tr>
		<td><input type="submit"></td>
		</tr>
	</table>
</form>

<table>
	<tr>
		<th>Sensor 1</th>
		<th>Sensor 2</th>
		<th>Sensor 3</th>
		<th>Data</th>
		<th>Hora</th>	
	</tr>
<?php
include ("conexao.php");

if (!isset($_GET['dataInicial']) && !isset($_GET['dataFinal'])){
	
		$comando="SELECT * FROM dados";
		
	}else{
		
	$dataInicial=$_GET['dataInicial'];
	$dataFinal=$_GET['dataFinal'];
	$comando = "SELECT * FROM dados WHERE data BETWEEN '{$dataInicial}' AND 
		'{$dataFinal}'";
}
$resultado=mysqli_query($conexao,$comando);
$dados=array();

while($guardaDados = mysqli_fetch_assoc($resultado)){
	array_push($dados,$guardaDados);
}

if($dados!=null){


foreach($dados as $cadaDado){
?>

<tr>
	<td><?php echo $cadaDado['sensor1']; ?></td>
	<td><?php echo $cadaDado['sensor2']; ?></td>
	<td><?php echo $cadaDado['sensor3']; ?></td>
	<td><?php echo $cadaDado['data']; ?></td>
	<td><?php echo $cadaDado['hora']; ?></td>
</tr>




<?php	
	
}
}else{
	
	echo "<tr><td colspan='5'>Nenhum registro encontrado</td></tr>";
	
}
	
?>



	
	
	
	
	
	
	
	
</table>


</body>
</html>