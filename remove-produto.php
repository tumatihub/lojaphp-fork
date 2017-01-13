<?php
require "header.php";
require "conecta.php";
require "banco-produto.php";
require "logica-usuario.php";
?>

<?php

$id = $_POST['id'];

removeProduto($conexao, $id);
$_SESSION['success'] = "Produto apagado com sucesso.";
header("Location: produto-lista.php");
die();
?>

