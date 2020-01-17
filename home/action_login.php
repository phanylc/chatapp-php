<?php
//header("location: /home/index.php");
require_once('../conexion.php');
session_start();

$usuario  = $_POST["usuario"];
$password = $_POST["password"];

$campos = ["ID", "nombre", "apellido", "telefono", "foto"];
$condiciones["password"] = hash("sha512",  $password, false);
$condiciones["correo"] = $usuario;

$resultado = $medoo->select("contactos", $campos, $condiciones);


if (count($resultado)>0){
    $_SESSION["ID"] = $resultado[0]["ID"];
    $_SESSION["nombre"] = $resultado[0]["nombre"];
    $_SESSION["apellido"] = $resultado[0]["apellido"];
    $_SESSION["telefono"] = $resultado[0]["telefono"];
    $_SESSION["foto"] = $resultado[0]["foto"];

    var_dump($resultado);

        header("location: /home/index.php");
}else{
    header("location: /home/login.php?error=0");
}
