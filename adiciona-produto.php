<?php require "header.php";
 require "conecta.php"; 
 require "banco-produto.php" ?>

<?php 


$nome = $_GET['nome'];
$preco = $_GET['preco'];


if (insereProduto($conexao, $nome, $preco)) : ?>

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