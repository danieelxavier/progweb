<?php
	session_start();
	 
	if (!empty($_SESSION['start'])) {
	 
		header('Location: inicio.php');
		exit();
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8" />
		<meta name="keywords" content="icomp, instituto de computação, icomp, ufam"  />
		<meta name="description" content="Primeiro exercício de Programação Web 2015/1" />
		<meta name="author" content="Daniel Xavier" />
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<title>PHP 3 - Login</title>
	</head>

	<body id="corpo_login" class="corpo">	

		<div class="container" id="content_login">

			<form class="form-signin" action="processa_login.php" method="post">
				<h2 class="form-signin-heading">Login</h2>

				<label for="login" class="sr-only">Login</label>
				
				<input type="text" id="login" class="form-control" placeholder="Login" name="login" required autofocus>
				
				<label for="senha" class="sr-only">Senha</label>
				
				<input type="password" id="senha" name="senha" class="form-control" placeholder="Password" required>
			
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="enviar">Entrar</button>
			</form>

		</div> <!-- /container -->

	</body>

</html>