<?php 
	session_start();

	if (!empty($_POST)) {

		$login = $_POST["login"];
		$senha = $_POST["senha"];

		if ($login == "demo" && $senha == "demo") {
			$inicio = "inicio.php";

			if (!isset($_SESSION['start'])) {
				$_SESSION['start'] = date('H:i');
				echo "Variáveis de sessão inicializadas";
			}			

			header('Location: '.$inicio);
		}
		else{
			session_destroy();
			echo "Login ou senha inválido <br><br>";
			echo "<a href='index.php'>Voltar</a>";
		}
	}
	else{
		if (!empty($_SESSION['start'])) {
	 
			header('Location: inicio.php');
			exit();
		}
		else{
			header('Location: index.php');
			exit();
		}
	}
 ?>