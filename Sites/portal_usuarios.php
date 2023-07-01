<?php

session_start();
$usuario = $_SESSION['nombre_usuario'];
echo "<h2>Bienvenido $usuario </h2>";
echo "estas en portal usuario";

?>