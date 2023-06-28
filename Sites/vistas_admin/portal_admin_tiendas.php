<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/conexion.php");
// Obtener las regiones
$nombre_region = $_POST["nombre"];



$query = "SELECT * FROM  tiendas WHERE region ='$nombre_region';";
$result = $db65 -> prepare($query);
$result -> execute();
$tiendas = $result -> fetchAll();
?>

<html>
<form align="center" method="POST" action="portal_admin_categorias.php">
    Seleccione una tienda:
    <select name="tienda">
    <?php foreach ($tiendas as $tienda): ?>
        <option value="<?php echo $tienda[0]; ?>"><?php echo $tienda[0]; ?></option>
    <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" value="Enviar">
</select>
</form>

</html>





