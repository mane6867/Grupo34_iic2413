<?php

require("config/conexion.php");

session_start();
$usuario = $_POST['nombre'];
$clave = $_POST['contrasena'];

$query = "SELECT * FROM usuarios 
    WHERE usuarios.nombre = '$usuario'
    AND usuarios.clave = '$clave';";
$consulta = $db34 -> prepare($query);
$consulta -> execute();
$cantidad = $consulta -> fetchAll();
print_r($cantidad);

?>