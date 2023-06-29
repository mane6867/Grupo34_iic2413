<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
  crossorigin="anonymous">
  <link href="styles/mystyles.css" rel="stylesheet" type="text/css">
  <title>Muebles3465</title>

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1"> -->

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



<!--<div class = 'container'>
<form align="center" method="POST" action="portal_admin_tiendas.php">
    Seleccione una región:
    <div class="select is-info">
    <select name="region">
    <option value="">Región</option>
    <?php //foreach ($regiones as $region): ?>
        <option value="<?php //echo $region[1]; ?>"><?php //echo $region[1]; ?></option>
    <?php //endforeach; ?>
    </select>
    <br>
    <input type="submit" value="Enviar">
    </br>
    </select>
    </div>
</form>
</div> -->


<div class="container">
    <div class="text-center" style="background-color: #aaa;">
        <p class="formulario-login-fuente-cabecera">Portal Administrador</p>
        <div class="formulario-login">
            <form action="portal_admin_tiendas.php" method="POST">
                <div class="login-elements">
                Seleccione una región:
                <div class="select">
                    <select name="region">
                        <?php foreach ($regiones as $region): ?>
                            <option value="<?php echo $region[1]; ?>"><?php echo $region[1]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="login-elements">
                    <input type="submit" value="Enviar" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

</html>