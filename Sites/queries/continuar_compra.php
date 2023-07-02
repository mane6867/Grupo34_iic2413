<?php

    require("../config/conexion.php");
    include('../templates/header.html');

    $id = $_POST['id_producto'];
    $id = intval($id);

    $query = "INSERT INTO carrito (id_producto) VALUES ('$id');";
    $result = $db65 -> prepare($query);
    $result -> execute();

?>

    <body>
        <br/><br/>
        <form action="terminar_compra.php" method="post">
            Escriba la fecha de despacho(Año-Mes-Día):
            <input type="text" name="fecha_despacho" style="width: 150px;">
            <br/><br/>
            <input type="submit" value="Pagar" style="width: 100px;">
        </form>
        <br/><br/>
        <form action="../portal_usuarios.php" method="post">
            <input type="submit" value="Seguir comprando" style="width: 200px;">
        </form>
    </body>

</html>