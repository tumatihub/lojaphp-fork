<?php require "header.php";
 require "conecta.php";
 require "banco-produto.php" ?>

<?php 
if ( array_key_exists("removido", $_GET) && $_GET['removido'] == 'true' ) {
?>
	<p class="alert-success">Produto apagado com sucesso.</p>
<?php
}
?>


<table class="table table-striped table-bordered">
<?php
$produtos = listaProdutos($conexao);

foreach($produtos as $produto):
?>
	<tr>
		<td><?php echo $produto['nome'];?></td>
		<td><?php echo $produto['preco'];?></td>
		<td><?php echo substr($produto['descricao'], 0, 40);?></td>
		<td><?php echo $produto['categoria_nome'];?></td>
		<td>
			<form action="remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
	</tr>
<?php
endforeach;

?>
</table>

<?php require "footer.php" ?>