CREATE OR REPLACE FUNCTION

crear_cliente (nombre VARCHAR, rut VARCHAR, region INT, comuna INT, calle VARCHAR, numero INT)

RETURNS BOOLEAN AS $$

DECLARE
idmax_direccion INT;
idmax_cliente INT;

BEGIN

    -- obtener ids
    SELECT INTO idmax_direccion MAX(id_direccion) FROM direccion;
    SELECT INTO idmax_cliente MAX(id_cliente) FROM clientes;   

    -- agregar la direccion  
    INSERT INTO direccion VALUES (idmax_direccion + 1, 
    (SELECT id_ubicacion FROM region_comuna WHERE id_region = region AND id_comuna = comuna;), 
    calle, numero);

    -- agregar el cliente
    INSERT INTO clientes VALUES (idmax_cliente + 1, idmax_direccion + 1, nombre, rut);

END

$$ language plpgsql