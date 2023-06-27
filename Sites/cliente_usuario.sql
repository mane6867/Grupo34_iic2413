CREATE OR REPLACE FUNCTION

importar_cliente (id int nombre varchar tipo varchar)

RETURN BOOLEAN AS $$

BEGIN
    
    IF id not in (SELECT id_usuario from usuarios) THEN
        INSERT INTO usuarios values(id, nombre, tipo, "1234");
        RETURN TRUE;
    ELSE
        RETURN FALSE;
    END IF;

END

$$ language plpqsql