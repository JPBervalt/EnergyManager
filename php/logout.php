<?php

session_start();
if(isset($_SESSION['email'])) {
	session_destroy();
	echo "
	<script>
	alert('Usuário deslogado com sucesso');
	location.href='../index.html';
	</script>
	";
}


?>