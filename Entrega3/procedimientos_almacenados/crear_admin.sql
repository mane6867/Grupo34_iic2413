CREATE OR REPLACE FUNCTION crear_admin()

RETURNS BOOLEAN AS $$

BEGIN
    -- verificar si existe o no el admin
    IF 'A' NOT IN (SELECT tipo FROM usuarios) THEN
        INSERT INTO usuarios VALUES ( 0, 'ADMIN', 'A', 'admin');
        RETURN TRUE;
    ELSE
        RETURN FALSE;
    END IF;
END

$$ LANGUAGE plpgsql;