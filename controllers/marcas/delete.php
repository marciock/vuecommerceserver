<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

$data = json_decode(file_get_contents("php://input"), true);
require_once __DIR__."/../../core/database.php";



//echo json_encode($data);

$sql="DELETE FROM Marcas WHERE id='{$data}'";
//echo json_encode($sql);

if ($pdo->query($sql) === TRUE) {
    $resposta="deu certo";
    echo json_encode($resposta);
  } else {
    $resposta="deu errado";
    echo json_encode($sql);
  }


//$pdo->close();



