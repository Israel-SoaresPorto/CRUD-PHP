<?php 

include "../config/config.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT login, senha FROM acesso WHERE login = '$login'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

$response = array();

if(password_verify($senha, $row['senha'])) {
    $response['status'] = 'ok';
    echo json_encode($response);
} else {
    $response['status'] = 'Login ou senha incorretos';
    echo json_encode($response);
}

$conn->close();