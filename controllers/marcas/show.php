<?php
// necessario para produção - usa o cabeçalho com o ip ou o loopback
/*require_once __DIR__."/../../core/dev.php";
header('Access-Control-Allow-Origin:'.$url);*/
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

require_once __DIR__."/../../core/database.php";


//$data = json_decode(file_get_contents("php://input"), true);

$list=$pdo->query("SELECT * FROM Marcas");

$list->execute();
$show=$list->fetchAll();

echo json_encode($show);