<?php

require("config/conexion.php");

session_start();

$nombre_login = $_POST['nombre'];
$clave_login = $_POST['contrasena'];

$query = ("SELECT * FROM usuarios WHERE nombre = '$nombre_login' AND clave = '$clave_login';");
$consulta = $db34 -> prepare(query);
$consulta -> execute();
$cantidad = pg_num_rows($consulta);

if($cantidad > 0){
    $_SESSION['nombre_usuario'] = $nombre_login;
    header('Location:portal_uusarios.php');
}
else{
    echo "Nombre de usuario o clave inválida";
}
?>