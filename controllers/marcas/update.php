<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

$data = json_decode(file_get_contents("php://input"), true);
require_once __DIR__."/../../core/database.php";

//echo json_encode($data);
if (!empty($data)){
$createdAt=date('Ymd');
$updatedAt=date('Ymd');
$sql="UPDATE  Marcas SET marca='{$data["marca"]}',descricao='{$data["descricao"]}',createdAt='{$createdAt}',updatedAt='{$updatedAt}' WHERE id = {$_GET["id"]}";
//echo json_encode($sql);
//(marca, descricao,createdAt,updatedAt)

if ($pdo->query($sql) === TRUE) {
	$pdo->execute();
    $resposta="deu derto";
    echo json_encode($resposta);
  } else {
    $resposta= "deu errado";
    echo json_encode($sql);
  }

}
//$pdo->close();



