<?php
require './sql/connection.php';
$sql = "SELECT * FROM buscarfilmes";
if (!empty($_GET['id_filmes'])) {
	$id_filme = $_GET['id_filmes'];
	$sql .= " WHERE id_filmes = '$id_filme'";
	$consulta = $con->query($sql);
	$row = mysqli_fetch_assoc($consulta);
}

?>
<div class="row ipad-width">
	<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
		<div class="form-style-1 user-pro" action="">
			<form action="" class="user">

				<div class="text-center">
					<img src="<?php echo ($row['imagem_filme'] != 'N/A' ? $row['imagem_filme'] : 'images/uploads/mv4.jpg'); ?>" alt="">
					<hr>
					<h4><?=$row['nome_filme']?></h4>
				</div>
				<div class="row">
					<div class="col-md-6 form-it">
						<label>Nome</label>
						<input type="text" name='nome_filme'readonly value="<?=$row['nome_filme']?>">
					</div>
					<div class="col-md-6 form-it">
						<label>Gênero</label>
						<input type="text" placeholder="" name='genero_filme' readonly value="<?=$row['genero_filme']?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 form-it">
						<label>Ano</label>
						<input type="text" placeholder="" name = 'ano_filme'readonly value="<?=$row['ano_filme']?>">
					</div>
					<div class="col-md-6 form-it">
						<label>Diretor</label>
						<input type="text" placeholder="" name = 'diretor_filme' readonly value="<?=$row['diretor_filme']?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 form-it">
						<label>Atores</label>
						<input type="text" placeholder="" name='atores_filmes'readonly value="<?=$row['atores_filmes']?>">
					</div>
					<div class="col-md-6 form-it">
						<label>Tempo de Duração</label>
						<input type="text" placeholder="" name="tempo_filmes" readonly value="<?=$row['tempo_filmes']?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 form-it">
						<label>Nota IMDb</label>
						<input type="text" placeholder="" name="nota_filmes" readonly value="<?=$row['nota_filmes']?>">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
