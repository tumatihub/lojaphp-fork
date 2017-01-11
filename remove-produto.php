<?php
require "header.php";
require "conecta.php";
require "banco-produto.php";
?>

<?php

$id = $_POST['id'];

removeProduto($conexao, $id);
header("Location: produto-lista.php?removido=true");
die();
?>

