<?php
	include "conexao.php";

	header('Content-Type: Application/json');

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$resposta = array();

	$verificar = "SELECT * FROM tblogin WHERE email = '$email' AND senha = '$senha'";

    if(isset($ocon) && $ocon){
        if(mysqli_num_rows(mysqli_query($ocon, $verificar)) > 0){
            $resposta["status"] = "sucesso";
            $resposta["mensagem"] = "Login bem sucedido";
            echo json_encode($resposta);
        }
        else{
            $resposta["status"] = "erro";
            $resposta["mensagem"] = "Email ou senha estão errados, tente novamente";
            echo json_encode($resposta);
        }
    }
?>
