<?php 
include_once "../model/rol.php";
//1
$id = ($_POST["id"]);
$estado = ($_POST["estado"]);

if ($estado=='A'){
    $estado='I';
} else {
    $estado='A';
}
//2
$rolM  = new \modelo\Rol();
//3
$rolM->setId($id);
$rolM->setEstado($estado);
//4
$response = $rolM->estado();
//5
unset($rolM);
//6
echo json_encode($response);
unset($response)
?>