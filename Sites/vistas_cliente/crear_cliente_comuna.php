<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
        }
        .form-container {
            background-color: #eee;
            padding: 20px;
            width: 400px;
            border: 2px solid #ccc;
            height: 370px; /* Ajusta la altura según tus necesidades */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 190px;
        }
        .portal-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }
    </style>
</head>
<?php include('templates/header.html');   ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/conexion.php");
// Obtener las regiones


$nombre = $_POST['nombre'];
$rut = $_POST['rut'];
$id_region = $_POST['region'];

session_start();

$_SESSION['nombre'] = $nombre;
$_SESSION['rut'] = $rut;
$_SESSION['region'] = $id_region;


$query = "SELECT comuna.nombre, comuna.id_comuna FROM region_comuna, comuna where comuna.id_comuna = region_comuna.id_comuna AND region_comuna.id_region = $id_region;";
$result = $db34 -> prepare($query);
$result -> execute();
$comunas = $result -> fetchAll();
?>



<div class = "container">
    <div class = "form-container">
        <div class="portal-title">Crear cuenta</div>
        <form align="center" method="POST" action = "../crear_sesion.php">
            <div>
                Seleccione una comuna:
            </div>
            <div class="select is-success">
            <select name="comuna">
                <?php foreach ($comunas as $comuna): ?>
                    <option value="<?php echo $comuna[1]; ?>"><?php echo $comuna[0]; ?></option>
                <?php endforeach; ?>
            </select>
            </div>
            <div>
            <br>
            Calle:
            <input type="text" name="calle" placeholder = "Calle" required>
            </div>
            <br>
            <div>
            Número:
            <input type="number" name="numero" placeholder = "Número" required>
            </div>
            <br>
            <input class="button is-success" type="submit" value="Enviar">
            </select>
        </form>
        <br>
        <br>
        <br>
        <form  align="center" action="../index.php" method="get">
            <input type="submit" value="Volver" class="button is-success">
        </form>
    </div>
</div>
