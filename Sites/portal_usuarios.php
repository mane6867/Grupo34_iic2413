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
    require("config/conexion.php");
    include('templates/header.html');

session_start();
$usuario = $_SESSION['nombre_usuario'];

$query = "SELECT cl.nombre, r.nombre AS region, co.nombre AS comuna, d.calle, d.numero FROM clientes cl JOIN direccion d ON cl.id_direccion = d.id_direccion JOIN region_comuna rc ON d.id_ubicacion = rc.id_ubicacion JOIN region r ON rc.id_region = r.id_region JOIN comuna co ON rc.id_comuna = co.id_comuna WHERE cl.nombre = '$usuario';";
$result = $db34 -> prepare($query);
$result -> execute();
$datos = $result -> fetchAll();

$query = "SELECT * FROM compras WHERE id_cliente = (SELECT id_cliente FROM clientes WHERE nombre = '$usuario') ORDER BY id_compra;";
$result = $db34 -> prepare($query);
$result -> execute();
$compras = $result -> fetchAll();
?>

<body>
<br/><br/>
<div style="text-align: center;">
  <div class="tabla-centrada">
    <table class='table' style="margin: 0 auto;">
            <tr>
            <th>Nombre</th>
            <th>Región</th>
            <th>Comuna</th>
            <th>Calle</th>
            <th>Número</th>
            </tr>
        <tbody>  
            <?php
            foreach ($datos as $dato) {
                echo "<tr>";
                echo "<td style='padding-right: 10px;'>$dato[0]</td>";
                echo "<td style='padding-right: 10px;'>$dato[1]</td>";
                echo "<td style='padding-right: 10px;'>$dato[2]</td>";
                echo "<td style='padding-right: 10px;'>$dato[3]</td>";
                echo "<td style='padding-right: 10px;'>$dato[4]</td>";
                echo "</tr>";
            }
            ?>
        </tbody> 
    </table>
  </div>
</div>
<br/><br/>
<div class="portal-title">Historial de compras</div>
<div style="text-align: center;">
  <div class="tabla-centrada">
    <table class='table' style="margin: 0 auto;">
            <tr>
            <th>Id Compra</th>
            <th>Id Tienda</th>
            <th>Fecha de la compra</th>
            </tr>
        <tbody>
            <?php
            foreach ($compras as $compra) {
                echo "<tr> <td>$compra[0]</td> <td>$compra[1]</td> <td>$compra[3]</td> </tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
</div>
<br/><br/>
<h1 align="center">
<div class="portal-title">Detalles de la compra</div>
<form action="queries/producto.php" method="post">
Id Compra:
<input type="text" name="id_compra" style="width: 150px;">
<br/><br/>
<input type="submit" value="Buscar" style="width: 100px;">
</form>
<br/><br/>
<div class="portal-title">Comprar nuevo producto</div>
<form action="queries/nueva_compra.php" method ="post">
Nombre del producto:
<input type="text" name="nombre_producto" style="width: 150px;">
<br/><br/>
<input type="submit" value= "Buscar" style="width: 100px;">
</form>
<br/><br/>
<form action="queries/vaciar_carrito.php" method="post">
<div class="portal-title">Vaciar carrito</div>
<input type="submit" value="Vaciar" style="width: 100px;">
</form>

</body>
</html>