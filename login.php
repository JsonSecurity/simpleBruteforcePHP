<?php
	$username = "Json";
	$password = "1234";
	if (isset($_POST['user']) && isset($_POST['pass'])){
		session_start();
		
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		if ($user === $username){
			if ($pass === $password){
				$_SESSION['error'] =  "Bienvenido";
			}else {
				$_SESSION['error'] = "Clave incorrecto";
			}
		}else {
			$_SESSION['error'] = "Usuario o clave incorrecto";
		}
		header("Location: index.php");
	}
?>
