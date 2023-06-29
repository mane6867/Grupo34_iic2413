<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/conexion.php");


//guardar categoria
session_start();
$categoria = $_POST['categoria'];
$_SESSION['categoria_producto'] = $categoria;
$id_tienda = $_SESSION['id_tienda'];


$query = "SELECT * FROM productos, stock WHERE productos.categoria = '$categoria' AND stock.id_tienda = $id_tienda 
        AND stock.id_producto = productos.id_producto;";
$result = $db65 -> prepare($query);
$result -> execute();
$productos = $result -> fetchAll();

?>

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
      width: 400px;
      border: 2px solid #ccc;
      height: 280px; /* Ajusta la altura según tus necesidades */
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-top: 120px;
    }
    .portal-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 30px;
    }
  </style>
</head>


<div class = "container">
    <div class = "form-container">
    <div class="portal-title">Portal Administrador</div>
<form align="center" method="POST" action="portal_admin_accion.php">
    <div>
    Seleccione un producto:
    </div>
    <div class="select is-success">
    <select name="producto">
    <?php foreach ($productos as $producto): ?>
        <option value="<?php echo $producto[0]; ?>"><?php echo $producto[1]; ?></option>
    <?php endforeach; ?>
    </select>
    <br>
    <input class="button is-success" type="submit" value="Enviar">
    </br>
    </select>
    </div>
</form>
</div>
</div>
</html>
