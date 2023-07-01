<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/conexion.php");

session_start();
$id_producto = $_POST['producto'];
$_SESSION['id_producto'] = $id_producto;
$id_tienda = $_SESSION['id_tienda'];


    $query = "SELECT * FROM productos, stock WHERE stock.id_producto = $id_producto AND stock.id_tienda = $id_tienda AND 
    stock.id_producto = productos.id_producto;";
    $result = $db65 -> prepare($query);
    $result -> execute();
    $datos_producto_stock = $result -> fetchAll();
    $precio = $datos_producto_stock[0][2];
    $descuento = $datos_producto_stock[0][9];
    $stock = $datos_producto_stock[0][8];


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
        <p class="formulario-login-fuente-cabecera">Stock</p>
        <div class="formulario-login">
            <form action="portal_admin_stock.php" method="POST">
                <div class="formulario-login-cabecera">
                    <p class="formulario-login-fuente-cabecera">Actualizar stock</p>
                </div>
                <div class="login-elements">
                    <p> <strong>Stock actual: </strong><?php echo $stock;?> </p>
                    <input type="number" name="stock" placeholder="Nuevo stock" min = 0 required>
                </div>
                <div class="login-elements">
                    <input type="submit" name="Actualizar" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="text-center" style="background-color: #eee;">
            <p class="formulario-login-fuente-cabecera">Oferta</p>
            <div class="formulario-login">
                <form action="portal_admin_oferta.php" method="POST">
                    <div class="formulario-login-cabecera">
                        <p class="formulario-login-fuente-cabecera">Armar oferta</p>
                    </div>
                    <div class="login-elements">
                        <p> <strong>Precio sin oferta:</strong> <?php echo $precio; ?></p>
                        <p> <strong>Porcentaje de descuento actual: </strong> <?php echo $descuento; ?></p>
                        <p> <strong>Precio con oferta:</strong> <?php echo $precio*(100-$descuento)/100; ?></p>
                        <input type="number" name="descuento" placeholder="Indique nuevo porcentaje de descuento" min = 0 max = 100 required>
                    </div>
                    <div class="login-elements">
                        <input type="submit" name="Crear" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<form  align="center" action="portal_admin_categorias.php" method="post">
    <input type="hidden" name="tienda" value= "<?php echo $_SESSION['categoria_producto']; ?>">
    <input type="submit" value="Volver" class="button is-success">
</form>


</body>


</html>