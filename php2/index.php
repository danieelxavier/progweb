<!DOCTYPE html>
	<head>
		<meta charset = "UTF-8" />
		<meta name="keywords" content="icomp, instituto de computação, icomp, ufam"  />
		<meta name="description" content="Primeiro exercício de Programação Web 2015/1" />
		<meta name="author" content="Daniel Xavier" />
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Minha primeira página</title>
	</head>
	

	<body>
		<h1>Este é um grande cabeçalho</h1>
		<h3>E este aqui é um pequeno cabeçalho</h3>

		<p>Aqui coloquei um paragrafo com algum texto aleatório, e a seguir vou inserir um formulário dentro de uma tabela. Além disso, aqui vai um link: <a href="http://icomp.ufam.edu.br/david">http://icomp.ufam.edu.br/david</a>.</p>

		<form action="processa.php" method="post">

			<table border="0">
				<tr>
					<td>
						<label for="nome_completo">Seu nome</label>
					</td>
					<td>
						<input id="nome_completo" type="text" name="nome_completo">
					</td>
				</tr>

				<tr>
					<td>
						<label for="sexo">Seu sexo</label>
					</td>
					<td>
						<select id="sexo" name="sexo" >
							<option value="masculino">Masculino</option>
							<option value="feminino">Feminino</option>
						</select>
					</td>	
				</tr>

				<tr>
					<td>
						<label for="comentario">Seus <br/>comentários</label>
					</td>
					<td>
						<textarea id="comentario" name="comentario" rows="6" cols="45"></textarea>
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