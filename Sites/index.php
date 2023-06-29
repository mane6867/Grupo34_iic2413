<html lang="en">
<body>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
  crossorigin="anonymous">
  <link href="styles/mystyles.css" rel="stylesheet" type="text/css">
  <title>Muebles3465</title>
</head>

<div class="container">
    <div class="text-center" style="background-color: #aaa;">
      <p class="formulario-login-fuente-cabecera">Muebles<span>3465</span></p>
      <div class="formulario-login">
        <form method="POST">
          <div class="formulario-login-cabecera">
            <p class="formulario-login-fuente-cabecera">Iniciar Sesión</p>
          </div>
          <div class="login-elements">
            <input type="text" name="nombre"placeholder="Usuario" required>
          </div>
          <div class="login-elements">
            <input type="password" name="contrasena"placeholder="Contraseña" required>
          </div>
          <div class="login-elements">
            <input type="submit" name="Ingresar" value="Ingresar" class="btn btn-success">
          </div>
        </form>
        <form align="center"  action='./importar_usuarios.php' method='GET'>
          <div class="login-elements">
            <input type='submit' value='Importar Usuarios' class="btn btn-success">
            </div>
        </form>
      </div>
    </div>
</div>

<?php
  if ($_POST['nombre']== "ADMIN" && $_POST['contrasena'] == 'admin'){
    header('Location: vistas_admin/portal_admin.php');
      exit;
  }
  elseif ($_POST['contrasena']!= '') 
    {header('Location: portal_usuarios.php');
    exit;}
?>

</body>
</html>
