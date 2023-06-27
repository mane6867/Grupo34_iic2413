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

  <form align="center" action="portal_usuarios.php" method="get">
      Nombre:
      <input type="text" name="nombre">
      <br/>
      Contraseña:
      <input type="text" name="contrasena">
      <br/>
      <input type="submit" value="Buscar">
</form>

  <br>
  <br>
  <br>
  <br>
</body>
</html>
