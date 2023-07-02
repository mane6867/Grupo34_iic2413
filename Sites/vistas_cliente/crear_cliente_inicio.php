<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muebles3465</title>
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
<div class = "container">
    <div class = "form-container">
        <div class="portal-title"> Crear cuenta</div>
        <form align="center" method="POST" action = "crear_cliente_comuna.php">
            <div>
            Nombre:
            </div>
            <input type="text" name="nombre" placeholder = "Nombre" required>
            <div>
            Rut:
            </div>
            <input type="text" name="rut" placeholder = "Rut" required>
            <div>
            Seleccione una región:
            </div>
            <br>
            <div class="select is-success">
            <select name="region">
            <?php foreach ($regiones as $region): ?>
                <option value="<?php echo $region[0]; ?>"><?php echo $region[1]; ?></option>
            <?php endforeach; ?>
            </select>

            <input class="button is-success" type="submit" value="Enviar">

            </div>
        </form>
        <form  align="center" action="../index.php" method="get">
            <input type="submit" value="Volver" class="button is-success">
        </form>
    </div>
</div>
</html>