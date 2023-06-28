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
    print_r($datos_producto_stock);
    print_r($datos_producto_stock[0][1]);
    print_r($datos_producto_stock[0][2]);

?>


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
