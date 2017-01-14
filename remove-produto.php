<?php
require_once("header.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");
?>

<?php

$id = $_POST['id'];

removeProduto($conexao, $id);
$_SESSION['success'] = "Produto apagado com sucesso.";
header("Location: produto-lista.php");
die();
?>

