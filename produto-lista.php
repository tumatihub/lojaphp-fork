<?php require "header.php";
 require "conecta.php";
 require "banco-produto.php" ?>



<table class="table table-striped table-bordered">
<?php
$produtos = listaProdutos($conexao);

foreach($produtos as $produto):
?>
	<tr>
		<td><?php echo $produto['nome'];?></td>
		<td><?php echo $produto['preco'];?></td>
	</tr>
<?php
endforeach;

?>
</table>

<?php require "footer.php" ?>