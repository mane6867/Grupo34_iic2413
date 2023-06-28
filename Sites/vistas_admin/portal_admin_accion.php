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

?>

<html>

<div class="container">
    <div class="text-center" style="background-color: #aaa;">
        <p class="formulario-login-fuente-cabecera">Opciones</p>
        <div class="formulario-login">
            <form action="inicio_sesion.php" method="POST">
                <div class="formulario-login-cabecera">
                    <p class="formulario-login-fuente-cabecera">Actualizar stock</p>
                </div>
                <div class="login-elements">
                    <input type="text" name="stock"placeholder="Nuevo stock" required>
                </div>
                <div class="login-elements">
                    <input type="password" name="contrasena"placeholder="Contraseña" required>
                </div>
                <div class="login-elements">
                    <input type="submit" name="Ingresar" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

</html>