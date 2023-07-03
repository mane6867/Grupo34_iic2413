<?php

    require("../config/conexion.php");
    include('../templates/header.html');

    $nombre = $_POST['nombre_producto'];

    $query = "SELECT p.nombre, p.id_producto, ROUND(p.precio-p.precio*0.01*s.descuento) AS precio_oferta, s.id_tienda FROM Productos AS p, Stock AS s WHERE LOWER(nombre) LIKE LOWER('%$nombre%') AND p.id_producto = s.id_producto LIMIT 10;";
    $query2 = "CREATE TABLE IF NOT EXISTS Carrito (id SERIAL PRIMARY KEY, id_producto INT, id_tienda INT, FOREIGN KEY (id_producto) REFERENCES Productos(id_producto), FOREIGN KEY (id_tienda) REFERENCES Tiendas(id_tienda));";
    $result = $db65 -> prepare($query);
    $result -> execute();
    $result2 = $db34 -> prepare($query2);
    $result2 -> execute();
    $producto = $result -> fetchAll();

?>

    <body>
    <div style="text-align: center;">
        <div class="tabla-centrada">
        <table class='table' style="margin: 0 auto;">
            <thead>
                <tr>
                <th>Nombre</th>
                <th>ID Producto</th>
                <th>Precio</th>
                <th>ID Tienda</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($producto as $p) {
                    echo "<tr> <td>$p[0]</td> <td>$p[1]</td> <td>$p[2]</td> <td>$p[3]</td> </tr>";
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    <br/><br/>
    <form action='continuar_compra.php' method='POST'>
        <div class='form-element'>
            <label for='id_producto'>Id del Producto:</label>
            <input type="text" name="id_producto" style="width: 150px;">
        </div>
        <br/><br/>
        <div class='form-element'>
            <label for='id_tienda'>Id de la Tienda:</label>
            <input type="text" name="id_tienda" style="width: 150px;">
        </div>
        <br/><br/>
        <input type="submit" value="Seguir" style="width: 100px;">
    </form>
</body>
</html>