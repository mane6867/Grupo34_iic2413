<?php

require("config/conexion.php");
session_start();
$usuario = $_POST['nombre'];
$clave = $_POST['contrasena'];
echo "<h2>Bienvenido $usuario $clave </h2>";

?>