CREATE OR REPLACE FUNCTION crear_admin()

RETURNS void AS $$

BEGIN
    -- verificar si existe o no el admin
    IF 0 NOT IN (SELECT id_usuario FROM usuarios) THEN
        INSERT INTO usuarios VALUES ( 0, 'ADMIN', 'A', 'admin');
    END IF;
END

$$ LANGUAGE plpgsql;