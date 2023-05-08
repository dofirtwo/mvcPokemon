<?php 
include_once "../model/rol.php";
//1
$nombreRol = ($_POST["txtRol"]);
//2
$rolM  = new \modelo\Rol();
//3
$rolM->setNombreRol($nombreRol);
//4
$response = $rolM->create();
//5
unset($rolM);
//6
echo json_encode($response);
?>