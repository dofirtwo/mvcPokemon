<?php 

include_once "../model/usuario.php";

$correo = $_GET["correo"];
$password = $_GET["password"];

$loginM = new \modelo\Usuario;

$loginM->setCorreo($correo);
$loginM->setPassword($password);

$response = $loginM->login();

json_encode($response);

unset($loginM);
unset($response);
