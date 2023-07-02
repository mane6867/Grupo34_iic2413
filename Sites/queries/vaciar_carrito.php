<?php

    require("../config/conexion.php");
    include('../templates/header.html');

    $query = "DELETE FROM Carrito;";
    $result = $db65 -> prepare($query);
    $result -> execute();

?>