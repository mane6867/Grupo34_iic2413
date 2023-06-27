<html>
<?php include('templates/header.html');   ?>

<body>
<link rel="stylesheet" href="styles/mystyles.css">
  
  <h1 align="center">Muebles3465</h1>

    <div class='container'>
        <form  action='./importar_usuarios.php' method='GET'>
            <input class='btn' type='submit' value='Importar Usuarios'>
        </form>
    </div>
  

    <div class="form-container">
    <h3 align="center"> Login Usuario</h3>

    <form align="center"  method="POST">
      Nombre:
      <input type="text" name="nombre" required>
      <br/>
      Contraseña:
      <input type="password" name="contrasena" required>
      <br/>
      <input type="submit" value="Ingresar">
    </form>
    </div>

<?php
  if ($_POST['nombre']== "ADMIN" && $_POST['contrasena'] == 'admin'){
    header('Location: portal_admin.php');
      exit;
  }
  elseif ($_POST['contrasena']!= '') 
    {header('Location: portal_usuarios.php');
    exit;}
?>


  <br>
  <br>
  <br>
  <br>
</body>
<style>
.form-container {
    border: 1px solid #ccc;
    padding: 20px;
    width: 350px;
    margin: 0 auto;
  }
</style>
</html>
