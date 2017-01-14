<?php
require_once("header.php");
require_once("banco-categoria.php");
require_once("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";

?>

<h1>Alterando produto</h1>

<form action="altera-produto.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	
	<?php include("produto-formulario-base.php"); ?>

	<input class="btn btn-primary" type="submit" value="Alterar">
</form>	

<?php require "footer.php" ?>