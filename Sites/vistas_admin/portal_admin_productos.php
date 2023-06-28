<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/conexion.php");
// Obtener las regiones


//$query = "SELECT * FROM productos WHERE categoria = $_SESSION['id_tienda'] ;";
//$result = $db65 -> prepare($query);
//$result -> execute();
//$productos = $result -> fetchAll();
//print_r($productos)

// Obtener las regiones
$query = "SELECT * FROM productos WHERE categoria = :id_tienda;";
$result = $db65->prepare($query);
$result->bindParam(':id_tienda', $_SESSION['id_tienda'], PDO::PARAM_INT);
$result->execute();
$productos = $result->fetchAll();
print_r($productos);
?>
?>
