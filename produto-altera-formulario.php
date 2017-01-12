<?php
require "header.php";
require "conecta.php";
require "banco-categoria.php";
require "banco-produto.php";

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";

?>

<h1>Alterando produto</h1>

<form action="altera-produto.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<div class="form-group">
		<label for="nome">Nome:</label>
		<input class="form-control" type="text" name="nome" id="nome" value="<?php echo $produto['nome'];?>">
	</div>
	<div class="form-group">
		<label for="preco">Preço:</label>
		<input class="form-control" type="number" name="preco" id="preco" value="<?php echo $produto['preco'];?>">
	</div>
	<div class="form-group">
		<label for="descricao">Descrição:</label>
		<textarea class="form-control" name="descricao" id="descricao"><?php echo $produto['descricao'];?></textarea>
	</div>
	<div class="row">
		<div class="col-md-3 form-group">
			<input type="checkbox" name="usado" id="usado" value="true" <?php echo $usado ?>>
			<label for="usado">Usado</label>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 form-group">
			<label for="categorias">Categorias:</label>
			<select class="form-control" name="categoria_id" id="categorias">
			<?php
			foreach($categorias as $categoria):
				$selected = $produto['categoria_id'] == $categoria['id'] ? "selected" : "";
			?>
				<option value="<?php echo $categoria['id'];?>" <?php echo $selected?> >
					<?php echo $categoria['nome'];?>
				</option>
			<?php 
			endforeach;
			?>
			</select>
		</div>
	</div>
	<br/>
	<input class="btn btn-primary" type="submit" value="Alterar">
</form>	

<?php require "footer.php" ?>