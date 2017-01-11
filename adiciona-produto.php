<?php require "header.php";
 require "conecta.php"; 
 require "banco-produto.php" ?>

<?php 


$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)) : ?>

	<p class="text-success">O produto <?php echo $nome ?>, <?php echo $preco ?> foi adicionado com sucesso!</p>
	<p><?php echo $query; ?></p>
<?php
else: 
?>

	<p class="text-danger">O produto <?php echo $nome ?> não foi adicionado.</p>
	<p><?php echo $query; ?></p>
<?php
endif;

mysqli_close($conexao);

?>



<?php require "footer.php" ?>