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

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <link href="styles/mystyles.css" rel="stylesheet" type="text/css">
    <title>Muebles3465</title>
</head>

<form align="center" method="POST" action="portal_admin_tiendas.php">
    Seleccione una región:
    <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Región
    </button>
    <ul class="dropdown-menu">
    <?php foreach ($regiones as $region): ?>
        <li><button class="dropdown-item" type="button"><?php echo $region[1]; ?></button></li>
    <?php endforeach; ?>
    </ul>
    </div>
    <input type="submit" value="Enviar">
</form>

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
    </select>
</form>

<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Región
    </button>
    <ul class="dropdown-menu">
    <?php foreach ($regiones as $region): ?>
        <li><button class="dropdown-item" type="button"><?php echo $region[1]; ?></button></li>
    <?php endforeach; ?>
    </ul>
</div>

</html>