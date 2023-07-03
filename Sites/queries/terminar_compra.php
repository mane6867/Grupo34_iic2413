<?php

    require("../config/conexion.php");
    include('../templates/header.html');

    session_start();
    $nombre = $_SESSION['nombre_usuario'];

    $fecha = $_POST['fecha_despacho'];

    $query = "SELECT * FROM compras ORDER BY id_compra DESC LIMIT 5;";
    $result = $db34 -> prepare($query);
    $result -> execute();
    $producto = $result -> fetchAll();

    $query = "SELECT actualizar_compras('$nombre', '$fecha');";
    $result = $db34 -> prepare($query);
    $result -> execute();
    $result -> fetchAll();

    $query = "SELECT disminuir_stock();";
    $result = $db65 -> prepare($query);
    $result -> execute();
    $result -> fetchAll();
    
?>

    <body>
        <table class='table'>
            <thead>
                <tr>
                <th>ID Compra</th>
                <th>ID Tienda</th>
                <th>ID Cliente</th>
                <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($producto as $p) {
                    echo "<tr> <td>$p[0]</td><td>$p[1]</td><td>$p[2]</td><td>$p[3]</td> </tr>";
                }
                ?>
            </tbody>
        </table>

    </body>
</html>