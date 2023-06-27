CREATE OR REPLACE FUNCTION

importar_cliente (id INT, nombre VARCHAR, tipo VARCHAR)

RETURNS BOOLEAN AS $$

BEGIN
    echo id
    
    IF id NOT IN (SELECT id_usuario from usuarios) THEN
        echo nombre
        INSERT INTO usuarios values(id, nombre, tipo, '1234');
        RETURN TRUE;
    ELSE
        RETURN FALSE;
    END IF;

END

$$ language plpgsql