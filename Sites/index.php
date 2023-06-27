<html>
<?php include('templates/header.html');   ?>

<body>
  <h1 align="center">Muebles3465</h1>
  <p style="text-align:center;">Aquí podrás encontrar información sobre compras.</p>

  <br>

  <h3 align="center"> Introduzca una fecha</h3>

  <form align="center" action="consultas/consulta_1.php" method="post">
    Fecha:
    <input type="text" name="fecha_seleccionada">
    <br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>


  <form align="center" action="consultas/consulta_tipo.php" method="post">
    Seleccinar un tipo:
    <select name="tipo">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      #foreach ($dataCollected as $d) {
      #  echo "<option value=$d[0]>$d[0]</option>";
      #}
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar por tipo">
  </form>
-->

    <div class='container'>
        <form  action='./importar_usuarios.php' method='GET'>
            <input class='btn' type='submit' value='Importar Usuarios'>
        </form>
    </div>

  <br>
  <br>
  <br>
  <br>
</body>
</html>
