<?php include('../templates/header.html');
error_reporting(E_ALL);
ini_set('display_errors', 1);

    # Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/conexion.php");

    // Primero obtenemos los datos del producto a actualizar
    session_start();
    $id_producto = $_SESSION['id_producto'];
    $nuevo_descuento = $_POST['descuento'];
    $id_tienda = $_SESSION['id_tienda'];

    $query = "SELECT * FROM stock WHERE stock.id_producto = $id_producto AND stock.id_tienda = $id_tienda;";
    $result = $db65 -> prepare($query);
    $result -> execute();
    $datos = $result -> fetchAll();




    $query = "SELECT actualizar_descuento($id_tienda, $id_producto, $nuevo_descuento);";
    $result = $db65 -> prepare($query);
    $result -> execute();

    $query = "SELECT * FROM stock WHERE stock.id_producto = $id_producto AND stock.id_tienda = $id_tienda;";
    $result = $db65 -> prepare($query);
    $result -> execute();
    $datos2 = $result -> fetchAll();




    $query = "SELECT * FROM productos, stock WHERE stock.id_producto = $id_producto AND stock.id_tienda = $id_tienda AND 
    stock.id_producto = productos.id_producto;";
    $result = $db65 -> prepare($query);
    $result -> execute();
    $datos_producto_stock = $result -> fetchAll();




    $precio_sin_descuento = $datos_producto_stock[0][2];


    $descuento_antiguo = $datos[0][4];
    $precio_descuento_antiguo = $precio_sin_descuento * (100-$descuento_antiguo)/100;

    $descuento_nuevo = $datos_producto_stock[0][9];
    $precio_descuento_nuevo = $precio_sin_descuento * (100 -$descuento_nuevo)/100;




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
    <div class="text-center" style="background-color: #eee;">
        <p class="formulario-login-fuente-cabecera">La oferta ha sido realizada</p>
        <div class="formulario-login">
            <form action="portal_admin.php" method="GET">

                <div class="login-elements">
                <p> <strong>Precio sin oferta: </strong><?php echo $precio_sin_descuento; ?></p>
                <p> <strong>Descuento: </strong> <?php echo $descuento_nuevo; ?></p>
                <p><strong> Precio con oferta: </strong> <?php echo $precio_descuento_nuevo; ?></p>
                </div>
                <div class="login-elements">
                    <input type="submit" value="Volver" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>



</html>
