<?php
	session_start();
	
	unset(
		$_SESSION['usuarioId'],
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioTipo'],
		$_SESSION['usuarioEmail'],
		$_SESSION['usuarioSenha']
	);
	setcookie("user", '');
	
	$_SESSION['logindeslogado'] = "Deslogado com sucesso";
	//redirecionar o usuario para a página de login
	header("Location: index.php");
?>