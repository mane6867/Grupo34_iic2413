<html lang="en">
<body>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <title>Muebles3465</title>
</head>
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

<div class="container">
    <div class="text-center" style="background-color: #eee;">
      <p class="formulario-login-fuente-cabecera">Muebles<span>3465</span></p>
      <div class="formulario-login">
        <form method="POST" action="inicio_sesion.php">
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
            <input type="submit" name="Ingresar" value="Ingresar" class="button is-success">
          </div>
        </form>
        <form align="center"  action='./importar_usuarios.php' method='GET'>
          <div class="login-elements">
            <input type='submit' value='Importar Usuarios' class="button is-success">
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
