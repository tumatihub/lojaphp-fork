<?php
require_once("conecta.php");

function buscaUsuario($conexao, $email, $senha){
	$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "SELECT * FROM usuarios WHERE email = '{$email}' and senha = '{$senhaMd5}'";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function usuarioExiste($conexao, $email){
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "SELECT * FROM usuarios WHERE email = '{$email}'";
	$resultado = mysqli_query($conexao, $query);
	if ($resultado->num_rows) {
		return true;
	} else {
		return false;
	}
}