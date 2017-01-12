<?php
	require "header.php";
	require "logica-usuario.php";
?>

<?php
	if (isset($_SESSION['danger'])){?>
		<p class="alert-danger"><?php echo $_SESSION['danger'];?></p>
<?php
	unset($_SESSION['danger']);
} ?>

<?php
	if (isset($_SESSION['success'])){?>
		<p class="alert-success"><?php echo $_SESSION['success'];?></p>
<?php
	unset($_SESSION['success']);
} ?>


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
	</form>
<?php } ?>

<?php require "footer.php" ?>