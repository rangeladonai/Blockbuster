<?php

$sql = "SELECT * FROM buscarfilmes";
if (!empty($_POST['nome_filme'])) {
	$nome_filme = $_POST['nome_filme'];
	$sql .= " WHERE nome_filme LIKE '%$nome_filme%'";
}

$resultado = $con->query($sql);
?>
<div class="row ipad-width">
	<div class="col-md-4 col-sm-12 col-xs-12">
		<div class="sidebar">
			<div class="searh-form">
				<h4 class="sb-title">Encontre um Filme</h4>
				<form action="?page=filmes" method="POST" class="form-style-1">
					<div class="row">
						<div class="col-md-12 form-it">
							<label>Nome do Filme</label>
							<input type="text" name='nome_filme' placeholder="Escreva o nome do filme">
						</div>
						<div class="col-md-12 ">
							<input class="submit" type="submit" value="Buscar">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-8 col-sm-12 col-xs-12">
		<div class="topbar-filter">
			<p>Encontrados <span><?php echo $resultado->num_rows; ?></span> filmes


		</div>
	</div>
	<div class="flex-wrap-movielist">
		<?php while ($cadastro_filmes = mysqli_fetch_assoc($resultado)) { ?>
			<a href="?page=ver-filme&id_filmes=<?php echo $cadastro_filmes['id_filmes']?>" class="movie-item-style-2 movie-item-style-1">
				<img src="<?php echo ($cadastro_filmes['imagem_filme'] != 'N/A' ? $cadastro_filmes['imagem_filme'] : 'images/uploads/mv4.jpg'); ?>" alt="">
				<div class="mv-item-infor">
					<h6><span class="film-name"><?php echo $cadastro_filmes['nome_filme']; ?></span></h6>
					<p class="rate"><i class="ion-android-star"></i><span><?php echo $cadastro_filmes['nota_filmes']; ?></span> /10</p>
				</div>
			</a>
		<?php } ?>
	</div>
</div>
</div>