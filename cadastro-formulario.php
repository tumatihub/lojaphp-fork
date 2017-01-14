<?php
require_once("header.php");

?>

<h1>Formulário de Cadastro</h1>

<form action="criaconta.php" method="post">
	<div class="form-group">
		<label for="email">e-mail:</label>
		<input class="form-control" type="email" name="email" id="email">
	</div>
	<div class="form-group">
		<label for="senha">Senha:</label>
		<input class="form-control" type="password" name="senha" id="senha">
	</div>
	<div class="form-group">
		<label for="confirma">Confirma:</label>
		<input class="form-control" type="password" name="confirma" id="confirma">
	</div>
	<input class="btn btn-success" type="submit" value="Cadastrar">
</form>

<?php require_once("footer.php"); ?>