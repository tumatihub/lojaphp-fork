<?php require_once("header.php"); ?>

<form action="envia-contato.php" method="post">
	<div class="form-group">
		<label for="nome">Nome:</label>
		<input class="form-control" type="text" name="nome" id="nome">
	</div>
	<div class="form-group">
		<label for="email">email:</label>
		<input class="form-control" type="email" name="email" id="email">
	</div>
	<div class="form-group">
		<label for="mensagem">Mensagem:</label>
		<textarea class="form-control" name="mensagem" id="mensagem"></textarea>
	</div>
	<button class="btn btn-primary">Enviar</button>
</form>

<?php require_once("footer.php"); ?>