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

if($usuario == "ADMIN" && $clave == "admin"){
    header('Location:vistas_admin/portal_admin.php');
}
elseif($cantidad[0] > 0){
    $_SESSION['nombre_usuario'] = $usuario;
    header('Location:portal_usuarios.php');
}
else{
    header('Location:index.php');
}

?>