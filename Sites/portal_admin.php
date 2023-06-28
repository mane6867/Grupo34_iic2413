<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("config/conexion.php");
// Obtener las regiones
$query = "SELECT * FROM region;";
$result = $db34 -> prepare($query);
$result -> execute();
$regiones = $result -> fetchAll();
?>

<html>
<select name="region">
    <?php foreach ($regiones as $region): ?>
        <option value="<?php echo $region[0]; ?>"><?php echo $region[1]; ?></option>
    <?php endforeach; ?>
</select>
</html>