<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/conexion.php");
// Obtener las regiones


$query = "SELECT *  FROM productos GROUP BY categoria;";
$result = $db65 -> prepare($query);
$result -> execute();
$categorias = $result -> fetchAll();
?>

<html>
<form align="center" method="POST" action="portal_admin_productos.php">
    Seleccione una categoria de producto:
    <select name="categoria">
    <option value=""> Categorías</option>
    <?php foreach ($categorias as $categoria): ?>
        <option value="<?php echo $categoria[0]; ?>"><?php echo $categoria[0]; ?></option>
    <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" value="Enviar">
</select>
</form>

</html>
