<?php

require("config/conexion.php");

session_start();
$usuario = $_POST['nombre'];
$clave = $_POST['contrasena'];

echo "Bienvendio $usuario $clave";

$query = "SELECT * FROM usuarios 
    WHERE usuarios.nombre = '$usuario'
    AND usuarios.clave = '$clave';";
$consulta = pg_query($db34, $query);
$cantidad = pg_num_rows($consulta);


if($cantidad > 0){
    $_SESSION['nombre_usuario'] = $usuario;
    header('Location:portal_usuarios.php');
}

?>