<?php
	$dsn = "mysql:host=localhost;dbname=login;charset=utf8";
	$usuario = "root";
	$senha = "";

	try{
		$PDO = new PDO($dsn, $usuario, $senha);

		//echo "Conectado";
	}
	catch(PDOExcepton $erro){
		echo "conexao_erro";
		exit;
	}
?>