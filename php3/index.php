<?php
	session_start();
	 
	if (!empty($_SESSION['start'])) {
	 
		header('Location: inicio.php');
		exit();
	}
?>


<!DOCTYPE html>
	<head>
		<meta charset = "UTF-8" />
		<meta name="keywords" content="icomp, instituto de computação, icomp, ufam"  />
		<meta name="description" content="Primeiro exercício de Programação Web 2015/1" />
		<meta name="author" content="Daniel Xavier" />
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>PHP 3 - Login</title>
	</head>

	<body>
		<h1>Login</h1>

		<form action="processa_login.php" method="post">

			<table border="0">
				<tr>
					<td>
						<label for="login">Login</label>
					</td>
					<td>
						<input id="login" type="text" name="login">
					</td>
				</tr>

				<tr>
					<td>
						<label for="senha">Senha</label>
					</td>
					<td>
						<input id="senha" type="password" name="senha">
					</td>
				</tr>

				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Enviar">
					</td>
				</tr>

			</table>


		</form>

	</body>

</html>