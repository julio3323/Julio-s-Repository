<?php
header('Content-Type: application/json');

$ocon = mysqli_connect(
        getenv('MYSQLHOST'),
        getenv('MYSQLUSER'),
        getenv('MYSQLPASSWORD'),
        getenv('MYSQL_DATABASE') /*?: "railway"*/,
        getenv('MYSQLPORT'));
$resposta = array();
if(!$ocon){
    header('Content-Type: application/json');
    $resposta["status"] = "erro";
    $resposta["mensagem"] = "Falha na conexão com o banco de dados";
    echo json_encode($resposta);
    exit;
}
?>
