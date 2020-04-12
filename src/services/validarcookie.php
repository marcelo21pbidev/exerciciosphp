<?php
	//verifica se a vari�vel foi iniciada
	if (IsSet($_COOKIE["id"])){
		$codigo = $_COOKIE["id"];
	}else{
		header("location:index.php");
		exit;
	}
	 

	if (IsSet($_COOKIE["nome"])){
		$nome_usuario = $_COOKIE["nome"];
	}else{
		header("location:index.php");
		exit;
	}
	 
	 
	if (IsSet($_COOKIE["senha"])){
		$senha_usuario = $_COOKIE["senha"];
	}else{
		header("location:index.php");
		exit;
	}

?>