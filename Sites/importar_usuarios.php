<?php

    // Nos conectamos a las bdds
    require("../config/conexion.php");
    include('../templates/header.html');

    // Primero obtenemos todos los pokemons de la tabla que queremos agregar
    $query = "SELECT * FROM clientes ORDER BY id;";
    $result = $db34 -> prepare($query);
    $result -> execute();
    $clientes = $result -> fetchAll();

    // crear_admin();

    foreach ($clientes as $cliente){

        echo $cliente;
        // cliente_usuario($cliente.id_cliente, $cliente.nombre, "C");

    }

    // $query = "SELECT * FROM usuarios ORDER BY id;";
    // $result = $db34 -> prepare($query);
    // $result -> execute();
    // $usuarios = $result -> fetchAll();

?>

    <!-- <body>  
        <table class='table'>
            <thead>
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                <!-?php
                // foreach ($usuarios as $usuario) {
                //     echo "<tr>";
                //     for ($i = 0; $i < 2; $i++) {
                //         echo "<td>$usuario[$i]</td> ";
                //     }
                //     echo "</tr>";
                // }
                ?>
            </tbody>
        </table>
        <footer>
        </footer>
    </body>
</html> -->