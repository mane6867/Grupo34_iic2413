<?php

    require("../config/conexion.php");
    include('../templates/header.html');

    $query = "DELETE FROM Carrito;";
    $result = $db34 -> prepare($query);
    $result -> execute();

    header("Location: ../portal_usuarios.php");

?>