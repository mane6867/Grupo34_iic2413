<?php

    // Nos conectamos a las bdds
    require("../config/conexion.php");
    include('../templates/header.html');

    // Primero obtenemos todos los pokemons de la tabla que queremos agregar
    $query = "SELECT * FROM clientes ORDER BY id;";
    $result = $db34 -> prepare($query);
    $result -> execute();
    $clientes = $result -> fetchAll();

    crear_admin()

    foreach ($clientes as $cliente){

        cliente_usuario($cliente.id_cliente, $cliente.nombre, "C")

    }


    // Mostramos los cambios en una nueva tabla
    $query = "SELECT * FROM pokemon ORDER BY id DESC;";
    $result = $db -> prepare($query);
    $result -> execute();
    $pokemons = $result -> fetchAll();

?>

    <body>  
        <table class='table'>
            <thead>
                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Type</th>
                <th>Total</th>
                <th>HP</th>
                <th>Attack</th>
                <th>Defense</th>
                <th>Sp. Atk</th>
                <th>Sp. Def</th>
                <th>Speed</th>
                <th>Legendary</th>
                <th>Generation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($pokemons as $pokemon) {
                    echo "<tr>";
                    for ($i = 0; $i < 11; $i++) {
                        echo "<td>$pokemon[$i]</td> ";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <footer>
            <p>
                IIC2413 - Ayudantía 3 BDD
            </p>
        </footer>
    </body>
</html>