<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="../styles/mystyles.css" rel="stylesheet" type="text/css">
    <title>Muebles3465</title>
</head>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/conexion.php");
// Obtener las regiones
$query = "SELECT * FROM region;";
$result = $db34 -> prepare($query);
$result -> execute();
$regiones = $result -> fetchAll();
?>

<form align="center" method="POST" action="portal_admin_tiendas.php">
    Seleccione una región:
    <select name="region">
    <option value="">Región</option>
    <?php foreach ($regiones as $region): ?>
        <option value="<?php echo $region[1]; ?>"><?php echo $region[1]; ?></option>
    <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" value="Enviar">
    </br>
    </select>
</form>


</html>