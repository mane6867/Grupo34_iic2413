<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/conexion.php");


//guardar categoria
session_start();
$categoria = $_POST['categoria'];
$_SESSION['categoria_producto'] = $categoria;
$id_tienda = $_SESSION['id_tienda'];
print_r($_SESSION['categoria_producto']);
print_r($_SESSION['id_tienda']);


//$query = "SELECT * FROM productos, stock WHERE productos.categoria = '$categoria' and stock.id_tienda = $id_tienda;";
//$result = $db65 -> prepare($query);
//$result -> execute();
//$productos = $result -> fetchAll();
//print_r($productos);

// Obtener las regiones

?>
