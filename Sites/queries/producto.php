<?php

    require("../config/conexion.php");
    include('../templates/header.html');

    $id_compra = $_POST['id_compra'];
    $id_compra = intval($id_compra);

    $query = "SELECT p.id_producto, p.nombre, p.precio, p.numero_cajas, p.precio*d.cantidad AS precio_total, de.fecha_entrega FROM Productos AS p, detalle_compra AS d, Compras AS c, Despachos AS de WHERE c.id_compra = $id_compra AND c.id_compra = d.id_compra AND d.id_producto = p.id_producto AND de.id_compra = c.id_compra;";
    $result = $db34 -> prepare($query);
    $result -> execute();
    $producto = $result -> fetchAll();

?>

    <body>
    <div style="text-align: center;">
        <div class="tabla-centrada">
        <table class='table' style="margin: 0 auto;">
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Numero de cajas</th>
                <th>Precio total</th>
                <th>Fecha de entrega</th>
                </tr>
            <tbody>
                <?php
                foreach ($producto as $p) {
                    echo "<tr> <td>$p[0]</td> <td>$p[1]</td> <td>$p[2]</td><td>$p[3]</td> <td>$p[4]</td> <td>$p[5]</td> </tr>";
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    </body>
</html>