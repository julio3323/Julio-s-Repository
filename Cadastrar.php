<?php
	include "conexao.php";

	header('Content-Type: Application/json');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if(isset($ocon) && $ocon){

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            
            $verificar = "SELECT * FROM Usuario WHERE email = '$email'";

            if(mysqli_num_rows(mysqli_query($ocon, $verificar)) == 0){

            $cadastrar = "INSERT INTO Usuario(nome, email, senha) VALUES('$nome','$email','$senha')";

                if(mysqli_query($ocon, $cadastrar)){
                    $resposta["status"] = "sucesso";
                    $resposta["mensagem"] = "Cadastro bem sucedido";
                    echo json_encode($resposta);
                }
            }
            else{
                $resposta["status"] = "erro";
                $resposta["mensagem"] = "Email já cadastrado";
                echo json_encode($resposta);
            }
        }
        else{
            $resposta["status"] = "erro";
            $resposta["mensagem"] = "Email inválido";
            echo json_encode($resposta);
        }
    }
?>
