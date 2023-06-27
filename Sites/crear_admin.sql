CREATE OR REPLACE FUNCTION crear_admin()

RETURNS void AS $$

BEGIN
    -- verificar si existe o no el admin
    IF NOT EXISTS (SELECT 1 FROM usuarios WHERE tipo = 'A') THEN
        INSERT INTO usuarios VALUES ('ADMIN', 'admin', 'A');
    END IF;
END;

$$ LANGUAGE plpgsql;