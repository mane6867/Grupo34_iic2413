<html>
<?php include('templates/header.html');   ?>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("config/conexion.php");

    // Primero obtenemos los datos del producto a actualizar
    session_start();
    print($_SESSION['id_producto'])

?>