<?php
	include "conexao.php";

	header('Content-Type: Application/json');

	$nome = $_POST['nome_app'];
	$email = $_POST['email_app'];
	$senha = $_POST['senha_app'];

	$sql_verifica = "SELECT * FROM tblogin WHERE email = :EMAIL";
	$stmt = $PDO->prepare($sql_verifica);
	$stmt->bindParam(':EMAIL', $email);
	$stmt->execute();

	if($stmt->rowCount() > 0){
		$resposta = ["status"] => "erro";
		$resposta = ["mensagem"] => "Email já cadastrado";
	}
	else{
		//cadastro realizado

		$cadastrar = "INSERT INTO tblogin (nome, email, senha) VALUES (:NOME, :EMAIL, :SENHA);";
		$stmt = $PDO->prepare($cadastrar);
		$stmt->bindParam(':NOME', $nome);
		$stmt->bindParam(':EMAIL', $email);
		$stmt->bindParam(':SENHA', $senha);

		if($stmt->execute()){
			$rsposta = ["status"] => "sucesso";
			$resposta = ["mensagem"] => "Cadastro bem sucedido";
		}else{
			$resposta = ["status"] => "erro"
			$resposta = ["mensagem"] => "Erro de cadastro, tente novamente mais tarde.";
		}
	}
	echo json_encode($resposta);
?>
