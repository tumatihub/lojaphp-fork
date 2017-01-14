<?php
require_once("conecta.php");


function criaContaPendente($conexao, $email, $senha){
	$email = mysqli_real_escape_string($conexao, $email);
	$senhaMd5 = md5($senha);
	$chave = md5(rand() . "{$senhaMd5}");
	$query = "INSERT INTO criaconta (email, chave, senha) VALUES ('{$email}', '{$chave}', '{$senhaMd5}')";
	if (mysqli_query($conexao, $query)) {
		return $chave;
	} else {
		return 0;
	}
}

function chavePendenteExiste($conexao, $chave){
	$chave = mysqli_real_escape_string($conexao, $chave);
	$query = "SELECT * FROM criaconta WHERE chave = '{$chave}'";
	$resultado = mysqli_query($conexao, $query);
	if ($resultado->num_rows) {
		return true;
	} else {
		return false;
	}
}

function removePendente($conexao, $chave){
	$chave = mysqli_real_escape_string($conexao, $chave);
	$query = "DELETE FROM criaconta WHERE chave = '{$chave}'";
	return mysqli_query($conexao, $query);
}

function ativaUsuarioPendente($conexao, $chave){
	$chave = mysqli_real_escape_string($conexao, $chave);
	$query = "SELECT * FROM criaconta WHERE chave = '{$chave}'";
	$resultado = mysqli_query($conexao, $query);
	if ($resultado->num_rows) {
		$pendente = mysqli_fetch_assoc($resultado);
		$email = $pendente['email'];
		$senha = $pendente['senha'];
		$query = "INSERT INTO usuarios (email, senha) VALUES ('{$email}', '{$senha}')";
		if (mysqli_query($conexao, $query)) {
			removePendente($conexao, $chave);
			return $email;
		}
	}
	return 0;
}