<?php
	$dsn = "mysql:host=mysql.railway.internal;dbname=railway;charset=utf8";
	$usuario = "root";
	$senha = "IQwFILBxneApDfoQuQzeaQEiCrDyHyVF";
	$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

	try{
		$PDO = new PDO($dsn, $usuario, $senha, $options);

		//echo "Conectado";
	}
	catch(PDOExcepton $erro){
		echo "conexao_erro";
		exit;
	}
?>
