<div class="row ipad-width">
	<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
		<div class="form-style-1 user-pro" action="">
			<form action="inclusao/inclusao_filmes.php" method="POST" class="user">

				<div class="row m-b-30">
					<div class="col-md-12 form-it">
						<h4>Buscar Filme OMDb</h4>
						<table cellpadding="0" cellspacing="0" border="0">
							<tbody>
								<tr>
									<td><input class="buscar-filme-omdb_inpt" type="text" placeholder="Nome do Filme"></td>
									<td style="width: 100px;">
										<input class="submit buscar-filme-omdb_btn" type="button" value="Buscar">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<hr>

				<h4>Detalhes do Filme</h4>
				<div class="row">
					<div class="col-md-6 form-it">
						<label>Nome</label>
						<input type="text" name='nome_filme'  placeholder="" readonly>
					</div>
					<div class="col-md-6 form-it">
						<label>Gênero</label>
						<input type="text" name="genero_filme" placeholder="" readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 form-it">
						<label>Imagem</label>
						<input type="text" name='imagem_filme' placeholder="" readonly>
					</div>
					<div class="col-md-6 form-it">
						<label>Ano</label>
						<input type="text" name="ano_filme"placeholder="" readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 form-it">
						<label>Diretor</label>
						<input type="text" name="diretor_filme" placeholder="" readonly>
					</div>
					<div class="col-md-6 form-it">
						<label>Atores</label>
						<input type="text" name='atores_filme'placeholder="" readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 form-it">
						<label>Tempo de Duração</label>
						<input type="text" name='tempo_filme' placeholder="" readonly>
					</div>
					<div class="col-md-6 form-it">
						<label>Nota IMDb</label>
						<input type="text" name='nota_filme' placeholder="" readonly>
					</div>
				</div>
				
				<br><br>
				<div class="row">
					<div class="col-md-12">
						<input class="submit" type="submit" value="Cadastrar Filme">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>