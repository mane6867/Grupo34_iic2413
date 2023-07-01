<?php

require("config/conexion.php");
session_start();
$usuario = $_POST['nombre'];
$clave = $_POST['contrasena'];

$query = "SELECT * FROM usuarios 
    WHERE '$usuario' = usuarios.nombre
    AND '$clave' = usuarios.clave;";
$consulta = pg_query($db34, $query);
$cantidad = pg_num_rows($consulta);


if($cantidad > 0){
    $_SESSION['nombre_usuario'] = $usuario;
    header('Location:portal_usuarios.php');
}
else{
    echo "Datos incorrectos :(";
}

?>