<!--login form popup-->
<div class="login-wrapper" id="login-content">
	<div class="login-content">
		<a href="#" class="close">x</a>
		<h3>Login</h3>
		<form method="post" action="controller/loginController.php?action=verificaLogin">
			<div class="row">
				<label for="username">
					Username:
					<input type="text" name="username" id="username" placeholder="" required="required" />
				</label>
			</div>

			<div class="row">
				<label for="password">
					Senha:
					<input type="password" name="password" id="password" placeholder="" required="required" />
				</label>
			</div>
      <hr>
			<div class="row">
				<button type="submit">Entrar</button>
			</div>
		</form>
	</div>
</div>
<!--end of login form popup-->