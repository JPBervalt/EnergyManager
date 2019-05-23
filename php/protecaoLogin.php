<?php


function protecaoLogin(){

session_start();
$logado;

if( isset($_SESSION['email']) ){
	$logado=true;
}else{
	$logado=false;
}

return $logado;

}













?>