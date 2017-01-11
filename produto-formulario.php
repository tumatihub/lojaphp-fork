<?php
require "header.php";
require "conecta.php";
require "banco-categoria.php";

$categorias = listaCategorias($conexao);

?>

<h1>Formulário de produto</h1>

<form action="adiciona-produto.php" method="post">
	Nome:
	<input class="form-control" type="text" name="nome"><br/>
	Preço:
	<input class="form-control" type="number" name="preco"><br/>
	Descrição:
	<textarea class="form-control" name="descricao"></textarea>
	Categorias:<br/>
	<?php foreach($categorias as $categoria):?>
		<input type="radio" name="categoria_id" value="<?php echo $categoria['id'];?>"><?php echo $categoria['nome'];?><br/>

	<?php endforeach; ?>
	<input class="btn btn-primary" type="submit" value="Cadastrar">
</form>	

<?php require "footer.php" ?>