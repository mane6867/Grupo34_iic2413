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
    $query = "SELECT cantidad FROM stock WHERE stock.id_producto = $id_producto AND stock.id_tienda = $id_tienda;";
    $result = $db65 -> prepare($query);
    $result -> execute();
    $stock_a = $result -> fetchAll();
    $stock_antiguo = $stock_a[0];
    print_r($stock_antiguo);
    print_r($stock_a);


    $query = "SELECT * FROM stock WHERE stock.id_producto = $id_producto AND stock.id_tienda = $id_tienda;";
    $result = $db65 -> prepare($query);
    $result -> execute();
    $datos = $result -> fetchAll();

    $query = "SELECT actualizar_stock($id_tienda, $id_producto, $nuevo_stock);";
    $result = $db65 -> prepare($query);
    $result -> execute();

    $query = "SELECT * FROM stock WHERE stock.id_producto = $id_producto AND stock.id_tienda = $id_tienda;";
    $result = $db65 -> prepare($query);
    $result -> execute();
    $datos2 = $result -> fetchAll();

?>

<html>

<table>
    <tr>
        <th>Producto</th>
        <th>Tienda</th>
        <th>Cantidad</th>
    </tr>
    <?php
        foreach ($datos as $dato) {
            echo "<tr><td>$dato[1]</td><td>$dato[2]</td> <td>$dato[3]</td></tr>";
        }
        foreach ($datos2 as $dato) {
            echo "<tr><td>$dato[1]</td><td>$dato[2]</td> <td>$dato[3]</td></tr>";
        }
    ?>
</table>

</html>