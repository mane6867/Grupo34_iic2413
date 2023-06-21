<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $fecha_seleccionada = $_POST["fecha_seleccionada"];

 	#$query = "SELECT * FROM pokemones where id = $id_nuevo;";
    #$query = "SELECT clientes.nombre, calle, numero_domicilio, comuna, region, 
    #fecha_entrega 
    #FROM despachos, pedidos, clientes, direccion_clientes 
    #WHERE despachos.id_compra = pedidos.id_compra
    #AND pedidos.id_cliente = clientes.id_cliente
    #AND direccion_clientes.id_cliente = clientes.id
    #AND DATE(fecha_entrega) = $fecha_seleccionada;"

    $query =  "SELECT * FROM despachos, compras, clientes 
    WHERE despachos.id_compra = compras.id_compra and compras.id_cliente = clientes.id_cliente 
    and despachos.fecha_entrega = '$fecha_seleccionada';"

	$result = $db -> prepare($query);
	$result -> execute();
	$clientes = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>

    </tr>
  <?php
	#foreach ($clientes as $cliente) {
  	#	echo "<tr><td>$cliente[0]</td><td>$cliente[1]</td></tr>";
	#}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>