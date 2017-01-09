<?php require "header.php" ?>

<?php 

$nome = $_GET['nome'];
$preco = $_GET['preco'];
?>
<p class="alert-success">Produto <?php echo $nome ?>, <?php echo $preco ?> adicionado com sucesso!</p>

<?php require "footer.php" ?>