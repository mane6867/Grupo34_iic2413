CREATE OR REPLACE FUNCTION crear_admin()

RETURNS void AS $$

BEGIN
    -- verificar si existe o no el admin
    IF NOT EXISTS (SELECT 1 FROM usuarios WHERE tipo = 'ADMIN') THEN

        INSERT INTO usuarios VALUES ( 0, 'ADMIN', 'A', 'admin');
    END IF;
END

$$ LANGUAGE plpgsql;