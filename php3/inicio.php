<?php
	session_start();
	 
	if (empty($_SESSION['start'])) {
	 
		header('Location: index.php');
		exit();
	}
	else{
		echo "<div style='color:white; background:black; text-align:center; margin-bottom:5px;'>
				Variáveis de sessão.......";
		echo "Start: " . $_SESSION['start'] . "<br></div>";
	}
	
?>

<!DOCTYPE html>
	<head>
		<meta charset = "UTF-8" />
		<meta name="keywords" content="icomp, instituto de computação, icomp, ufam"  />
		<meta name="description" content="Primeiro exercício de Programação Web 2015/1" />
		<meta name="author" content="Daniel Xavier" />
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<title>PHP 3 - Início</title>
	</head>

	<body class="corpo">

		<div class="container">

			<a href="processa_logout.php">Logout</a>

			<h1>Este é um grande cabeçalho</h1>
			<h3>E este aqui é um pequeno cabeçalho</h3>

			<p>Aqui coloquei um paragrafo com algum texto aleatório, e a seguir vou inserir um formulário dentro de <br>
				uma tabela. Além disso, aqui vai um link: <a href="http://icomp.ufam.edu.br">http://icomp.ufam.edu.br</a>.</p>

			<form class="form-signin" action="processa.php" method="post" id="form_coment">

				<h3>Enviar Comentário</h2>

				<label for="login" class="sr-only">Seu nome</label>
				
				<input type="text" id="nome_completo" class="form-control" placeholder="Seu nome" name="nome_completo" required autofocus>
				
				<label for="senha" class="sr-only">Seu sexo</label>
				
				<select id="sexo" name="sexo" class="form-control">
					<option value="" disabled selected>Sexo</option>
					<option value="masculino">Masculino</option>
					<option value="feminino">Feminino</option>
				</select>

				<label for="login" class="sr-only">Seus Comentários</label>
				
				<textarea class="form-control" rows="5" id="comment" name="comentario" placeholder="Comentários" required autofocus></textarea>

				<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Enviar</button>
			</form>
		</div>

	</body>

</html>