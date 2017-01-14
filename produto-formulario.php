<?php
require_once("header.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");


verificaUsuario();

$categorias = listaCategorias($conexao);

$produto = array(
	'nome' => '',
	'preco' => '',
	'descricao' => '',
	'categoria_id' => '1'
);

$usado = '';

?>

<h1>Formulário de produto</h1>

<form action="adiciona-produto.php" method="post">
	
	<?php include("produto-formulario-base.php"); ?>

	<input class="btn btn-primary" type="submit" value="Cadastrar">
</form>	

<?php require "footer.php" ?>