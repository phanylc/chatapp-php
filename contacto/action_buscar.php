<?php
require_once('../conexion.php');
$busqueda =  $_GET ["busqueda"] ;
$campos = ["ID", "nombre", "apellido", "foto"];

$resultado = $medoo->select ("contactos", $campos, [
    "OR"=>[
        "nombre[~]"=>"%$busqueda%",
        "apellido[~]"=>"%$busqueda%"
    ]
]);

echo json_encode($resultado);
  ?>
