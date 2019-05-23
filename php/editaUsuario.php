<?php
//Incluir o arquivo conexao 
include ("conexao.php");
//Capturar o id vindo do formulário de edição
$id=$_POST['id'];
//Criar o comando para buscar todos os campos daquele
//usuário no banco de dados, para exibir para a edição
$comando="SELECT * FROM usuario WHERE idUsuario={$id}";
//Executando no banco de dados o comando criado
$resultado=mysqli_query($conexao,$comando);
//Organizando na variável usuário o usuário retornado do banco
$usuario=mysqli_fetch_assoc($resultado);
//Exibindo as informações do usuário que foi
//retornado do banco e armazenado em $usuario
?>
<?php include("cabecalhoMenu.php");   ?>
<link rel="stylesheet" href="../css/formUsuario.css">
<h1>Edição de usuário</h1>

<form action="atualizaUsuario.php" method="POST">

<input type="hidden" 
value="<?php echo $usuario['idUsuario']; ?>" 
name="idEscondido">

	<table>
	<tr>
		<td><label>E-mail de usuário</label></td>
		<td><input type="text" 
		value="<?php echo $usuario['emailUsuario']; ?>"
		placeholder="email@dominio.com" name="email" class="inputs"></td>
	</tr>	
	
	
	<tr>
		<td><label>Senha de usuário</label></td>
		<td><input type="password" placeholder="Senha" name="senha" class="inputs"></td>
	</tr>	
	
	<tr>
		<td>
			<label>Tipo de Usuário</label>
		</td>
		<?php if($usuario['tipoUsuario']==1){ ?>
		
		<td>
			<select name="tipo" class="inputs">
				<option value="1" selected>Administrador</option>
				<option value="2">Usuário comum</option>
			</select>
		</td>
		<?php }else{ ?>
		<td>
			<select name="tipo" class="inputs">
				<option value="1">Administrador</option>
				<option value="2" selected>Usuário comum</option>
			</select>
		</td>
		<?php } ?>
	</tr>
	
		<tr>
		<td>
			<button type="submit" class="botao"><img src="../img/cadastrar.png"></button>
			<button type="reset" class="botao"><img src="../img/limpar.png"></button>
		</td>
	</tr>
	</table>
</form>














