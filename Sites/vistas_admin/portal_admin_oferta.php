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
    $precio_descuento_antiguo = $precio_sin_descuento * $descuento_antiguo/100;

    $descuento_nuevo = $datos_producto_stock[0][9];
    $precio_descuento_nuevo = $precio_sin_descuento * $descuento_nuevo/100;




?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="box">
  <h2> La oferta ha sido recibida</h2>
  <p> Precio sin descuento: <?php $precio_sin_descuento; ?></p>
  <p> Descuento: <?php $descuento_nuevo; ?></p>
  <p> Precio con descuento: <?php $precio_descuento_nuevo; ?></p>
</div>

<table>
    <tr>
        <th>Producto</th>
        <th>Tienda</th>
        <th>Descuento</th>
    </tr>
    <?php
        foreach ($datos as $dato) {
            echo "<tr><td>$dato[1]</td><td>$dato[2]</td> <td>$dato[4]</td></tr>";
        }
        foreach ($datos2 as $dato) {
            echo "<tr><td>$dato[1]</td><td>$dato[2]</td> <td>$dato[4]</td></tr>";
        }
    ?>
</table>

</html>
