<?php 
include_once "../model/usuario.php";
//1
$tipoDoc = ($_POST["tipoDoc"]);
$numero = ($_POST["numero"]);
$nombre= ($_POST["nombre"]);
$apellido= ($_POST["apellido"]);
$correo= ($_POST["correo"]);
$password= ($_POST["password"]);
$direccion= ($_POST["direccion"]);
$telefono= ($_POST["telefono"]);
$genero= ($_POST["genero"]);
$rol= ($_POST["rol"]);
//2
$usuarioM  = new \modelo\Usuario;
//3
$usuarioM->setTipoDoc($tipoDoc);
$usuarioM->setNumero($numero);
$usuarioM->setNombre($nombre);
$usuarioM->setApellido($apellido);
$usuarioM->setCorreo($correo);
$usuarioM->setPassword($password);
$usuarioM->setDireccion($direccion);
$usuarioM->setTelefono($telefono);
$usuarioM->setGenero($genero);
$usuarioM->setRol($rol);
//4
$response = $usuarioM->create();
//5
unset($usuarioM);
//6
echo json_encode($response);
?>