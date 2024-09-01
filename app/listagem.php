<?php

include '../config/config.php';

$sql = "SELECT * FROM estudantes";
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
         

