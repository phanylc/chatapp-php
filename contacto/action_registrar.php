<?php
require_once('../conexion.php');
use Medoo\Medoo;

$contacto["nombre"] = $_POST["nombre"];
$contacto["apellido"] = $_POST["apellido"];
$contacto["telefono"] = $_POST["telefono"];
$contacto["sexo"] = $_POST["sexo"];
$contacto["password"] = hash("sha512",  $_POST["password"], false);
$contacto["correo"] = $_POST["correo"];

$status = $medoo->insert('contactos', $contacto);

if($status != null){
    header("location: /contacto/confirmacion_registro.php?estado=ok");
}else{
    header("location: /contacto/confirmacion_registro.php?estado=error");
}
?>