<?php 
require_once("header.php"); 
require_once("banco-produto.php");
require_once("logica-usuario.php");
?>

<?php 

verificaUsuario();

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if ( array_key_exists('usado', $_POST)) {
	$usado = "true";	
} else {
	$usado = "false";
}

if (alteraProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado, $id)) : ?>

	<p class="text-success">O produto <?php echo $nome ?>, <?php echo $preco ?> foi alterado com sucesso!</p>
<?php
else: 
?>

	<p class="text-danger">O produto <?php echo $nome ?> não foi alterado.</p>
<?php
endif;

mysqli_close($conexao);

?>



<?php require "footer.php" ?>