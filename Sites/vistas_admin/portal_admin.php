<html>
<head>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
      max-width: 400px;
      margin-top: 50px;
    
      
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
<form align="center" method="POST" action="portal_admin_tiendas.php">
    <div>
    Seleccione una región:
    </div>
    <div class="select is-info">
    <select name="region">
    <?php foreach ($regiones as $region): ?>
        <option value="<?php echo $region[1]; ?>"><?php echo $region[1]; ?></option>
    <?php endforeach; ?>
    </select>
    <br>
    <input class="button" type="submit" value="Enviar">
    </br>
    </select>
    </div>
</form>
</div>
</div>

<!--
<div class="container">
    <div class="text-center" style="background-color: #aaa;">
        <p class="formulario-login-fuente-cabecera">Portal Administrador</p>
        <div class="formulario-login">
            <form action="portal_admin_tiendas.php" method="POST">
            <div class="formulario-login-cabecera">
            <p class="formulario-login-fuente-cabecera">Seleccione una región:</p>
          </div>
                <div class="login-elements">
                <div class="select">
                    <select name="region">
                        <?php //foreach ($regiones as $region): ?>
                            <option value="<?php //echo $region[1]; ?>"><?php //echo $region[1]; ?></option>
                        <?php //endforeach; ?>
                    </select>
                </div>
                <div class="login-elements">
                    <input type="submit" value="Enviar" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
-->


</html>