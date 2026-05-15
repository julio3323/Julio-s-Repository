<?php
	include "conexao.php";

	header('Content-Type: Application/json');

	$email = $_POST['email_app'];
	$senha = $_POST['senha_app'];

	$logar = "SELECT * FROM tblogin WHERE email = :EMAIL AND senha = :SENHA";
	$stmt = $PDO->prepare($logar);
	$stmt->bindParam(':EMAIL', $email);
	$stmt->bindParam(':SENHA', $senha);
	$stmt->execute();

	if($stmt->rowCount() > 0){
		$resposta = ["status"] => "sucesso";
		$resposta = ["mensagem"] => "Login realizado com sucesso";
	}else{
		$resposta = ["status"] => "erro");
		$resposta = ["mensagem"] => "Erro nas credenciais do usuário";
	}

	echo json_encode($resposta);
?>
