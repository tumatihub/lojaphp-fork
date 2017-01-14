<?php
require_once("header.php");
require_once("logica-usuario.php");
?>

<h1>Hello!</h1>

<?php
if (usuarioEstaLogado()) {
?>
	<p class="text-success">Você está logado como <?php echo usuarioLogado();?>. <a href="logout.php">Deslogar</a></p>
<?php
} else { ?>
	<h2>Login</h2>

	<form class="col-md-4" action="login.php" method="post">

		<div class="form-group">
			<label for="email">e-mail:</label>
			<input class="form-control" type="email" name="email" id="email">
		</div>
		<div class="form-group">
			<label for="senha">Senha:</label>
			<input class="form-control" type="password" name="senha" id="senha">
		</div>
		<input class="btn btn-primary" type="submit" value="Login">
		<a href="cadastro-formulario.php" class="btn btn-success">Cadastrar</a>
	</form>
<?php } ?>

<?php require "footer.php" ?>