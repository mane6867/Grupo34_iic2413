# Entrega 3 - Grupo 34 y 65

### Funcionalidad adicional: 
Un usuario no registrado puede crear su propia cuenta mediante el botón "Crear cuenta" en la página principal, luego de presionar este botón se deben rellenar ciertos forms para poder obtener sus datos. Cabe aclarar que en el input de rut se debe colocar el parámetro sin puntos y con guion, simulando un rut real, valga decir con esto, deben ser 8 números, seguidos de un gion y un número o la letra k. Una vez registrado, se almacenan sus datos en Clientes y Usuarios, es posible comprobar esto al visualizar los ususarios mediante el botón "Importar Usuarios".


### Contraseñas aleatorias: 
Las claves para los usuarios son creadas al azar, se seleccionó una serie de carácteres que pueden ser parte de estas y se programó de tal manera que las claves de los usuarios fueran de largo 10 y que puedan contener únicamente los carácteres indicados. Para poder visualizar estas contraseñas se puede presionar el botón "Importar Usuarios", con esto se desplegará una tabla que contiene los datos de todos los usuarios, incluyendo sus claves.


Por otro lado, para visualizarlas en la base de datos, se puede realizar la siguiente consulta en el server del Grupo 34, en la base de datos ```grupo34e3```:

```SELECT nombre, clave FROM usuarios```

### Importar usuarios:
La acción de importar usuarios fue realizada mediante dos procedimiento almacenados, uno de ellos corresponde a la función ```crear_admin()``` y el otro a la función ```importar_cliente(id_cliente, nombre, tipo)```.

### Procedimientos almacenados
Los procedimientos creados se encuentran en dentro de ```Entrega3```, en la carpeta ```procedimientos_almacenados``` dentro del server del Grupo 34 y dentro de ```Entrega3``` en el server del Grupo 65.

