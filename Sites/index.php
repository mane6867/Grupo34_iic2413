<html>
<?php include('templates/header.html');   ?>

<body>
  
  <h1 align="center">Muebles3465</h1>

    <div class='container'>
        <form  action='./importar_usuarios.php' method='GET'>
            <input class='btn' type='submit' value='Importar Usuarios'>
        </form>
    </div>
  
    <h3 align="center"> Login Usuario</h3>

    <form align="center"  method="POST">
      Nombre:
      <input type="text" name="nombre" required>
      <br/>
      Contraseña:
      <input type="text" name="contrasena" required>
      <br/>
      <input type="submit" value="Ingresar">
    </form>

<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Procesar los datos del formulario aquí
      $nombre = $_POST['nombre'];
      $contrasena = $_POST['contrasena'];
      // Realizar las operaciones necesarias con los datos recibidos
      $query = "SELECT clave FROM usuarios WHERE nombre = $nombre;";
      $result = $db34 -> prepare($query);
      $result -> execute();
      // Mostrar un mensaje de éxito
      echo "¡Los datos se han enviado correctamente!";
  }
?>
<?php
  if ($_POST['nombre']== "ADMIN" && $_POST['contrasena'] = 'admin'){
    header('Location: portal_admin.php');
      exit;
  }
  elseif ($_POST['contrasena'] == $result and $nombre != '') 
    {header('Location: portal_usuarios.php');
    exit;}
?>


  <br>
  <br>
  <br>
  <br>
</body>
</html>
