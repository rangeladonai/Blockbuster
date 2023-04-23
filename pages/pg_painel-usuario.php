<?php
require './sql/connection.php';
$sql = "SELECT * FROM usuario";
if (!empty($_SESSION['usuario'])) {
	$usuario = $_SESSION['usuario'];
	$sql .= " WHERE username = '$usuario'";
	$consulta = $con->query($sql);
	$row = mysqli_fetch_assoc($consulta);
}	
?>
<div class="row ipad-width">
	<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
		<div class="form-style-1 user-pro" action="">
			<form action="" class="user">

				<h4>Painel do Usuário</h4>
				<div class="row">
					<div class="col-md-6 form-it">
						<label>Nome</label>
						<input type="text" placeholder="" value="<?=$row['username']?>" readonly>
					</div>
					<div class="col-md-6 form-it">
						<label>Senha</label>
						<input type="password" placeholder="" value="<?=$row['senha']?>" readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 form-it">
						<label>CEP</label>
						<input type="text" placeholder="" value="<?=$row['cep']?>" readonly>
					</div>
					<div class="col-md-6 form-it">
						<label>Rua</label>
						<input type="text" placeholder="" value="<?=$row['rua']?>" readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 form-it">
						<label>Bairro</label>
						<input type="text" placeholder="" value="<?=$row['bairro']?>" readonly>
					</div>
					<div class="col-md-6 form-it">
						<label>Cidade</label>
						<input type="text" placeholder="" value="<?=$row['Cidade']?>" readonly>
					</div>
					<div class="col-md-6 form-it">
						<label>Estado</label>
						<input type="text" placeholder="" value="<?=$row['estado']?>" readonly>
					</div>
				</div>
				<br><br>
				
				
				<!-- <br><br>
				<div class="row">
					<div class="col-md-12">
						<input class="submit" type="submit" value="Alterar Informações">
					</div>
				</div> -->
			</form>
		</div>
	</div>
</div>