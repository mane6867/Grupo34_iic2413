<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/conexion.php");
// Obtener las regiones


$query = "SELECT DISTINCT categoria FROM productos;";
$result = $db65 -> prepare($query);
$result -> execute();
$categorias = $result -> fetchAll();

session_start();
$id_tienda = $_POST['tienda'];
$_SESSION['id_tienda'] = $id_tienda;
print_r($_SESSION['id_tienda']);
?>

<html>
<form align="center" method="POST" action="portal_admin_productos.php">
    Seleccione una categoria de producto:
    <select name="categoria">
    <option value=""> Categorías</option>
    <?php foreach ($categorias as $categoria): ?>
        <option value="<?php echo $categoria[0]; ?>"><?php echo $categoria[0]; ?></option>
    <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" value="Enviar">
</select>
</form>

</html>
