<?php
	include("cabecalhoMenu.php");
?>
<link rel="stylesheet" href="../css/formUsuario.css">
<h1>Cadastro de usuário</h1>

<form action="cadastroUsuario.php" method="POST">
	<table>
	<tr>
		<td><label>E-mail de usuário:</label></td>
		<td><input type="text" placeholder="email@dominio.com" name="email" class="inputs"></td>
	</tr>	
	
	
	<tr>
		<td><label>Senha de usuário:</label></td>
		<td><input type="password" placeholder="Senha" name="senha" class="inputs"></td>
	</tr>	
	
	<tr>
		<td>
			<label>Tipo de Usuário:</label>
		</td>
		<td>
			<select name="tipo" class="inputs">
				<option value="1">Administrador</option>
				<option value="2">Usuário comum</option>
			</select>
		</td>
	</tr>
	
		<tr>
		<td>
			<button type="submit" class="botao"><img src="../img/cadastrar1.png"></button>
			<button type="reset" class="botao"><img src="../img/limpar2.png"></button>
		</td>
	</tr>
	</table>
</form>

<h2>Consulta de usuário</h2>
<form action="#" method="GET">
<input type="text" name="consulta" placeholder="Ex.: nome@dominio.com"id="inputConsulta">
<button type="submit" class="botao">
<img src="../img/pesquisa.png"></button>
</form>
<table>
<tr>
<th>E-mail de usuário/</th>
<th>Tipo de usuário/</th>
<th>Ações</th>
</tr>
<?php
include ("conexao.php");

if(isset($_GET['consulta'])){
$consulta=$_GET['consulta'];
$comando="SELECT * FROM usuario WHERE 
ativoUsuario=1 AND emailUsuario LIKE 
'%{$consulta}%'  ";	
}else{
$comando="SELECT * FROM usuario WHERE 
ativoUsuario=1";
}
$resultado=mysqli_query($conexao,$comando);
$linhas=mysqli_num_rows($resultado);
$arrayUsuarios=array();
if($linhas==0){
	echo "
	<tr>
	<td>Nenhum registro encontrado</td>
	</tr>
	";
}else{
/* A variável $u assumirá cada linha retornada
na consulta feita de dentro da variável $resultado
Cada linha ($u) será guardada dentro do array
chamado $arrayUsuarios*/
	while($u = mysqli_fetch_assoc($resultado)){
		array_push($arrayUsuarios,$u);		
	}
}

/*Retirando os registros de dentro do array*/
foreach($arrayUsuarios as $cadaUsuario){

?>
<tr>
<td><?php echo $cadaUsuario['loginUsuario']; ?></td>

<td>

<?php if($cadaUsuario['tipoUsuario']==1){
	echo "Administrador";
}else{
	echo "Usuário Comum";
}
?>

</td>
<td>
<form action="editaUsuario.php" method="POST">
<input type="hidden" name="id" value="<?php echo $cadaUsuario['idUsuario']; ?>">
<button type="submit" class="botoes">
<img src="../img/editar.png">
</button>
</form>

<form action="excluiUsuario.php" method="POST">
<input type="hidden" name="id" value="<?php echo $cadaUsuario['idUsuario']; ?>">
<button type="submit" class="botoes">
<img id="lata" src="../img/excluir.png">
</button>
</form>

</td>
</tr>

<?php
		}
?>
</table>