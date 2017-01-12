<?php
require "header.php";
require "conecta.php";
require "banco-categoria.php";
require "logica-usuario.php";


verificaUsuario();

$categorias = listaCategorias($conexao);

?>

<h1>Formulário de produto</h1>

<form action="adiciona-produto.php" method="post">
	<div class="form-group">
		<label for="nome">Nome:</label>
		<input class="form-control" type="text" name="nome" id="nome">
	</div>
	<div class="form-group">
		<label for="preco">Preço:</label>
		<input class="form-control" type="number" name="preco" id="preco">
	</div>
	<div class="form-group">
		<label for="descricao">Descrição:</label>
		<textarea class="form-control" name="descricao" id="descricao"></textarea>
	</div>
	<div class="row">
		<div class="col-md-3 form-group">
			<input type="checkbox" name="usado" id="usado" value="true">
			<label for="usado">Usado</label>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 form-group">
			<label for="categorias">Categorias:</label>
			<select class="form-control" name="categoria_id" id="categorias">
			<?php foreach($categorias as $categoria):?>
				<option value="<?php echo $categoria['id'];?>">
					<?php echo $categoria['nome'];?>
				</option>
			<?php endforeach; ?>
			</select>
		</div>
	</div>
	<br/>
	<input class="btn btn-primary" type="submit" value="Cadastrar">
</form>	

<?php require "footer.php" ?>