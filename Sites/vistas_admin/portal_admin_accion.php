<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/conexion.php");

session_start();
$id_producto = $_POST['producto'];
$_SESSION['id_producto'] = $id_producto;

?>
<html lang="en">
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <link href="../styles/mystyles.css" rel="stylesheet" type="text/css">
    <title>Muebles3465</title>
</head>

<div class="container">
    <div class="text-center" style="background-color: #aaa;">
        <p class="formulario-login-fuente-cabecera">Opciones</p>
        <div class="formulario-login">
            <form action="portal_admin_stock.php" method="POST">
                <div class="formulario-login-cabecera">
                    <p class="formulario-login-fuente-cabecera">Actualizar stock</p>
                </div>
                <div class="login-elements">
                    <input type="text" name="stock"placeholder="Nuevo stock" required>
                </div>
                <div class="login-elements">
                    <input type="submit" name="Actualizar" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="text-center" style="background-color: #aaa;">
            <p class="formulario-login-fuente-cabecera">Opciones</p>
            <div class="formulario-login">
                <form action="portal_admin_oferta.php" method="POST">
                    <div class="formulario-login-cabecera">
                        <p class="formulario-login-fuente-cabecera">Armar oferta</p>
                    </div>
                    <div class="login-elements">
                        <input type="text" name="stock"placeholder="Precio oferta" required>
                    </div>
                    <div class="login-elements">
                        <input type="submit" name="Crear" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>

</html>