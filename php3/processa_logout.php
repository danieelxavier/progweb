<?php 
	session_start();

	if (empty($_SESSION['start'])) {
	 
		header('Location: index.php');
		exit();
	}
	else{
		session_destroy();

		header('Location: index.php');
	}

 ?>