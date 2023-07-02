<?php

    require("../config/conexion.php");
    include('../templates/header.html');

    $query = "SELECT * FROM Carrito;";
    $result = $db65 -> prepare($query);
    $result -> execute();
    $producto = $result -> fetchAll();
    
?>

    <body>
        <table class='table'>
            <thead>
                <tr>
                <th>ID</th>
                <th>ID Producto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($producto as $p) {
                    echo "<tr> <td>$p[0]</td> <td>$p[1]</td> </tr>";
                }
                ?>
            </tbody>
        </table>

    </body>
</html>