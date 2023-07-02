CREATE OR REPLACE FUNCTION

importar_cliente (id INT, nombre VARCHAR, tipo VARCHAR)

RETURNS BOOLEAN AS $$

DECLARE
contrasena VARCHAR := '';
characters VARCHAR := 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*';
i INT;

BEGIN
    FOR i IN 1..10 LOOP 
        contrasena := contrasena || substring(characters, floor(random() * length(characters) + 1)::int, 1);
    END LOOP;

    IF id NOT IN (SELECT id_usuario from usuarios) THEN
        INSERT INTO usuarios values(id, nombre, tipo, contrasena);
        RETURN TRUE;
    ELSE
        RETURN FALSE;
    END IF;

END

$$ language plpgsql