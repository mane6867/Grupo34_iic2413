CREATE OR REPLACE FUNCTION

crear_cliente (nombre VARCHAR, rut VARCHAR, region INT, comuna INT, calle VARCHAR, numero INT)

RETURNS BOOLEAN AS $$

BEGIN
    
    IF id NOT IN (SELECT id_cliente from clientes) THEN

        RETURN TRUE;
    ELSE
        RETURN FALSE;
    END IF;

END

$$ language plpgsql