<?php

  # BBDD Grupo 34
  try {
    #Pide las variables para conectarse a la base de datos.
    require('data34.php'); 
    # Se crea la instancia de PDO
    $db34 = new PDO("pgsql:dbname=$databaseName34;host=localhost;port=5432;user=$user34;password=$password34");
  } catch (Exception $e) {
    echo "No se pudo conectar a la base de datos: $e";
  }

  # BBDD Grupo 65
  try {
    #Pide las variables para conectarse a la base de datos.
    require('data65.php'); 
    # Se crea la instancia de PDO
    $db65 = new PDO("pgsql:dbname=$databaseName65;host=localhost;port=5432;user=$user65;password=$password65");
  } catch (Exception $e) {
    echo "No se pudo conectar a la base de datos: $e";
  }
?>
