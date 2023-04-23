<?php
session_start();
ob_start();
require './sql/connection.php';
//var_dump($_SESSION);
if (isset($_SESSION['usuario'])){
	$GLOBALS['usuarioLogado'] = true;
}else{
	$GLOBALS['usuarioLogado'] = false;
}

if (isset($_GET['usercadastrado'])) {
	echo '<script>alert("Usuario cadastrado com sucesso!")</script>';
}
if (isset($_GET['erro']) && $_GET['erro'] == 1){
	echo '<script>alert("USUARIO NÃO CADASTRADO, FAVOR REALIZAR O CADASTRO!")</script>';
}
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<head>
	<!-- Basic need -->
	<title>Senai Filmes</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

	<!--Google Font-->
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-senai.css">

</head>

<body>

	<?php include_once('inc/preloader.php'); ?>
	<?php include_once('inc/login.php'); ?>
	<?php include_once('inc/signup.php'); ?>

	<?php include_once('inc/header.php'); ?>



	<div class="page-single">
		<div class="container">

			<?php
			$page_initial = 'filmes';
			$page_include = $page_initial;

			if (isset($_GET['page']) && $_GET['page'] != '') {
				$page_get = htmlspecialchars($_GET['page'], ENT_QUOTES, 'UTF-8');
				$page_include = $page_get;
			}

			$page_path = 'pages/pg_';
			$page_include_path = $page_path . $page_include . '.php';

			if (file_exists($page_include_path)) {
				include_once($page_include_path);
			} else {
				include_once($page_path . $page_initial . '.php');
			}
			?>

		</div>
	</div>

	<?php include_once('inc/footer.php'); ?>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/plugins2.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/script-senai.js"></script>
</body>

</html>