<?php

function buscaUsuario($conexao, $email, $senha){
	$senhaMd5 = md5($senha);
	$query = "SELECT * FROM usuarios WHERE email = '{$email}' and senha = '{$senhaMd5}'";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}