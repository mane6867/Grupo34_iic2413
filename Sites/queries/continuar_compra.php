<?php

    require("../config/conexion.php");
    include('../templates/header.html');

    $id_p = $_POST['id_producto'];
    $id_p = intval($id_p);

    $id_t = $_POST['id_tienda'];
    $id_t = intval($id_t);

    $query = "INSERT INTO carrito (id_producto, id_tienda) VALUES ('$id_p', '$id_t');";
    $result = $db34 -> prepare($query);
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