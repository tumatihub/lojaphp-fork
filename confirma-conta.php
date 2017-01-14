<?php
require_once("banco-criaconta.php");

session_start();

$chave = $_GET['chave'];

if ( chavePendenteExiste($conexao, $chave) ){
	$usuarioEmail = ativaUsuarioPendente($conexao, $chave);
	if ( $usuarioEmail ){
		$_SESSION['success'] = "Usuário {$usuarioEmail} ativado com sucesso.";
	} else {
		$_SESSION['danger'] = "Ocorreu um erro ao tentar ativar a conta {$usuarioEmail}.";
	}
	header("Location: index.php");
	die();
} else {
	$_SESSION['danger'] = "A conta informada não existe. Faça um novo cadastro.";
	header("Location: cadastro-formulario.php");
	die();
}
