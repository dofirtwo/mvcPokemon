<?php 
include_once "../model/rol.php";
//1
$nombreRol = ($_POST["txtRol"]);
$id =($_POST["id"]);
//2
$rolM  = new \modelo\Rol;
//3
$rolM->setNombreRol($nombreRol);
$rolM->setId($id);
//4
$response = $rolM->update();
//5
echo json_encode($response);
//6
unset($rolM);
unset($response);
?>