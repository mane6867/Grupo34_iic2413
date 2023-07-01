<?php include('../templates/header.html');
error_reporting(E_ALL);
ini_set('display_errors', 1);

    # Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/conexion.php");

    // Primero obtenemos los datos del producto a actualizar
    session_start();
    $id_producto = $_SESSION['id_producto'];
    $nuevo_stock = $_POST['stock'];
    $id_tienda = $_SESSION['id_tienda'];

    $query = "SELECT * FROM stock WHERE stock.id_producto = $id_producto AND stock.id_tienda = $id_tienda;";
    $result = $db65 -> prepare($query);
    $result -> execute();
    $datos = $result -> fetchAll();

    $antiguo_stock = $datos[0][3];

    $query = "SELECT actualizar_stock($id_tienda, $id_producto, $nuevo_stock);";
    $result = $db65 -> prepare($query);
    $result -> execute();

    $query = "SELECT * FROM stock WHERE stock.id_producto = $id_producto AND stock.id_tienda = $id_tienda;";
    $result = $db65 -> prepare($query);
    $result -> execute();
    $datos2 = $result -> fetchAll();

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
        <p class="formulario-login-fuente-cabecera">El stock ha sido actualizado</p>
        <div class="formulario-login">
            <form action="portal_admin.php" method="GET">

                <div class="login-elements">
                <p> <strong>Stock antiguo: </strong><?php echo $antiguo_stock; ?></p>
                <p> <strong>Stock actual: </strong> <?php echo $nuevo_stock; ?></p>
                </div>
                <div class="login-elements">
                    <input type="submit" value="Volver" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>


</html>

