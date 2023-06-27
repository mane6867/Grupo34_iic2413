CREATE OR REPLACE FUNCTION

importar_cliente (id INT , nombre VARCHAR,  tipo VARCHAR)

RETURN BOOLEAN AS $$

BEGIN
    
    IF id NOT IN (SELECT id_usuario from usuarios) THEN
        INSERT INTO usuarios values(id, nombre, tipo, '1234');
        RETURN TRUE;
    ELSE
        RETURN FALSE;
    END IF;

END

$$ language plpqsql