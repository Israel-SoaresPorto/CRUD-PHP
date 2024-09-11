<?php 

include "../config/config.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$senha_cripto = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO acesso (login, senha) VALUES ('$usuario', '$senha_cripto')";

$response = array();

if($conn->query($sql)) {
    $response['status'] = 'ok';
    echo json_encode($response);
} else {
    $response['status'] = 'Houve um erro ao cadastrar novo usuário';
    echo json_encode($response);
}

$conn->close();