<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("config/conexion.php");
    include 'crear_admin.sql';

    // Primero obtenemos todos los pokemons de la tabla que queremos agregar
    $query = "SELECT * FROM clientes ORDER BY id_cliente;";
    $result = $db34 -> prepare($query);
    $result -> execute();
    $clientes = $result -> fetchAll();


    $query = "SELECT crear_admin();";
    $result = $db34 -> prepare($query);
    $result -> execute();

    foreach ($clientes as $cliente){
        $query = "SELECT importar_cliente($cliente[0], '$cliente[2]', 'C');";
        $result = $db34 -> prepare($query);
        $result -> execute();

    }

    $query = "SELECT * FROM usuarios ORDER BY id_usuario;";
    $result = $db34 -> prepare($query);
    $result -> execute();
    $usuarios = $result -> fetchAll();

?>

    <body>  
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
                foreach ($usuarios as $usuario) {
                    echo "<tr>";
                    for ($i = 0; $i < 2; $i++) {
                        echo "<td>$usuario[$i]</td> ";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <footer>
        </footer>
    </body>
</html>

</body>