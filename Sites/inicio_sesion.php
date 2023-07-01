<?php

session_start();
$usuario = $_POST['nombre'];
echo "<h2>Bienvenido $usuario </h2>";

?>