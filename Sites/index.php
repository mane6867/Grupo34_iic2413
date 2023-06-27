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



    <form align="center"  method="post" class = "box">
    <div class="field">
    <label class="label">Nombre:</label>
    <input type="text" name="nombre">
    <br/>
    </div>

      Nombre:
      <input type="text" name="nombre">
      <br/>
      Contraseña:
      <input type="text" name="contrasena">
      <br/>
      <input type="submit" value="Ingresar">
    </form>


<?php session_start(); ?>
<?php
  if ($_POST['nombre']== "ADMIN" && $_POST['contrasena'] = 'admin'){
    header('Location: portal_admin.php');
      exit;
  }
  elseif ($_POST['nombre']!= '') 
    {header('Location: portal_usuarios.php');
    exit;}
?>


  <br>
  <br>
  <br>
  <br>
</body>
</html>
