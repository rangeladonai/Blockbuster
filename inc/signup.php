<!--signup form popup-->
<div class="login-wrapper" id="signup-content">
	<div class="login-content">
		<a href="#" class="close">x</a>
		<h3>Cadastro</h3>
		<form method="post" action="?page=insert-user">
			<div class="row">
				<label for="username-2">
					Username:
					<input type="text" name="username" placeholder="" required="required" />
				</label>
			</div>
			<div class="row">
				<label for="password-2">
					Senha:
					<input type="password" name="password" placeholder="" required="required" />
				</label>
			</div>
      <div class="row">
				<label for="cep">
					CEP:
					<input type="text" name="endereco_cep" placeholder="" required />
				</label>
			</div>
      <div class="row">
				<label for="endereco_rua">
					Rua:
					<input type="text" name="endereco_rua" placeholder="" readonly required />
				</label>
			</div>
      <div class="row">
				<label for="endereco_bairro">
					Bairro:
					<input type="text" name="endereco_bairro" placeholder="" readonly required />
				</label>
			</div>
      <div class="row">
				<label for="endereco_cidade_estado">
					Cidade/Estado:
					<input type="text" name="endereco_cidade_estado" placeholder="" readonly required />
				</label>
			</div>
      <hr>
			<div class="row">
				<button type="submit">Cadastrar</button>
			</div>
		</form>
	</div>
</div>
<!--end of signup form popup-->