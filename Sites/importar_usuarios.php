<html>
<?php include('templates/header.html');   ?>

<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("config/conexion.php");

    // Primero obtenemos todos los pokemons de la tabla que queremos agregar
    $query = "SELECT * FROM clientes ORDER BY id_cliente;";
    $result = $db34 -> prepare($query);
    $result -> execute();
    $clientes = $result -> fetchAll();

    // Verificar la existencia del admin
    $query = "SELECT * FROM usuarios ORDER BY id_usuario;";
    $result = $db34 -> prepare($query);
    $result -> execute();
    $usuarios = $result -> fetchAll();

    $admin = FALSE;
    foreach ($usuarios as $usuario){
        if($usuario[0] == 0){
            $admin = TRUE;
        }
    }

    if(! $admin){
        $query = "SELECT crear_admin();";
        $result = $db34 -> prepare($query);
        $result -> execute();
    }


    // Importar los clientes
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

<div style="text-align: center;">
<div class="tabla-centrada">
  <table  style="margin: 0 auto;">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Tipo</th>
      <th>Clave</th>
    </tr>
    <?php
      foreach ($usuarios as $usuario) {
        echo "<tr><td>$usuario[0]</td><td>$usuario[1]</td> <td>$usuario[2]</td> <td>$usuario[3]</td> </tr>";
    }
    ?>
  </table>
</div>
</div>

<br>
<br>
</body>
<form  align="center" action="index.php" method="get">
    <input type="submit" value="Volver" class="button is-success">
</form>
</html>