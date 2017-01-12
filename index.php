<?php require "header.php" ?>

<?php
if(isset($_GET['login'])){
	if($_GET['login'] == true){
	?>
		<p class="alert-success">Logado com sucesso!</p>
	<?php
	} else {
	?>
		<p class="alert-danger">Usuário ou senha inválida.</p>
	<?php
	}
}
?>

	<h1>Hello!</h1>

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
	</form>

<?php require "footer.php" ?>