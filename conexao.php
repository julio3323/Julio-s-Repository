<?php
	$dsn = "mysql:host=mysql.railway.internal;dbname=railway;charset=utf8";
	$usuario = "root";
	$senha = "IQwFILBxneApDfoQuQzeaQEiCrDyHyVF";

	try{
		$PDO = new PDO($dsn, $usuario, $senha);

		//echo "Conectado";
	}
	catch(PDOExcepton $erro){
		echo "conexao_erro";
		exit;
	}
?>
