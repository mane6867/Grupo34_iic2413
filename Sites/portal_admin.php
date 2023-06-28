<?php
// Obtener las regiones
$query = "SELECT id_region, nombre FROM region ORDER BY ASC;";
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