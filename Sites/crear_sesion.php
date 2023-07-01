<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require("config/conexion.php");

session_start();
$comuna = $_POST['comuna'];
$calle = $_POST['calle'];
$numero_calle = $_POST['numero'];
$nombre_cliente = $_SESSION['nombre'];
$rut_cliente = $_SESSION['rut'];
$region = $_SESSION['region'];



$query = "SELECT crear_cuenta($nombre, $rut, $region, $comuna, $calle, $numero_calle);";
$consulta = $db34 -> prepare($query);
$consulta -> execute();

$query = "SELECT id_cliente FROM clientes WHERE nombre = $nombre_cliente AND rut = $rut_cliente;";
$consulta = $db34 -> prepare($query);
$consulta -> execute();
$resultado = $consulta -> fetchAll();
$id_cliente = $resultado[0][0];

$query = "SELECT importar_cliente($id_cliente, '$nombre', 'C');";
$result = $db34 -> prepare($query);
$result -> execute();

header('Location:portal_usuarios.php');

?>