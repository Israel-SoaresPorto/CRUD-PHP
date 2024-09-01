<?php
include '../config/config.php';

$buscar_por = $_POST['buscar-por'];
$param = $_POST['param'];

switch ($buscar_por) {
    case 'nome':
        $sql = "SELECT * FROM estudantes WHERE nome like '%$param%'";
        break;
    case 'escolaridade':
        $sql = "SELECT * FROM estudantes WHERE escolaridade = '$param'";
        break;
    case 'serie':
        $valor = intval($param);
        $sql = "SELECT * FROM estudantes WHERE serie = $valor";
        break;
}

$result = $conn->query($sql);

if ($result) {
    $data = array();

    while ($row = $result->fetch_assoc()) {
        $map = array(
            "id" => $row['id'],
            "nome" => $row['nome'],
            "escolaridade" => $row['escolaridade'],
            "serie" => $row['serie'],
        );

        array_push($data, $map);
    }

    echo json_encode($data);
}

$conn->close();
