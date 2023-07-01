<?php

require("config/conexion.php");

session_start();
$comuna = $_POST['comuna'];
$calle = $_POST['calle'];
$numero_calle = $_POST['numero'];
$nombre = $_SESSION['nombre'];
$rut = $_SESSION['rut'];
$region = $_SESSION['region'];



$query = "SELECT crear_cuenta($nombre, $rut, $region, $comuna, $calle, $numero_calle);";
$consulta = $db34 -> prepare($query);
$consulta -> execute();

header('Location:portal_usuarios.php');

?>