<?php require "header.php" ?>

<h1>Formulário de produto</h1>

<form action="adiciona-produto.php">
	Nome:
	<input class="form-control" type="text" name="nome"><br/>
	Preço:
	<input class="form-control" type="number" name="preco"><br/>

	<input class="btn btn-primary" type="submit" value="Cadastrar">
</form>	

<?php require "footer.php" ?>