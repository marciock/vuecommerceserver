<?php
// necessario para produção - usa o cabeçalho com o ip ou o loopback
/*require_once __DIR__."/../../core/dev.php";
header('Access-Control-Allow-Origin:'.$url);*/
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

require_once __DIR__."/../../core/database.php";


//$data = json_decode(file_get_contents("php://input"), true);
$sql="SELECT p.id,p.produto,p.marca, p.preco, m.id as idMarca ,m.marca FROM Produtos as p INNER JOIN Marcas as m ON p.marca=m.id WHERE p.id={$_GET['id']}";


$list=$pdo->query($sql);
    $list->execute();
    $show=$list->fetch();
    echo json_encode($show);




