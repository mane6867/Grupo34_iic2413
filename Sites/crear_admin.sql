CREATE OR REPLACE FUNCTION

crear_admin ();

RETURNS void AS $$

BEGIN
    -- verificar si existe o no el admin 
    IF 'A' not in (SELECT tipo FROM usuarios) THEN
        insert into usuarios values('ADMIN','admin','Admin');
    END IF;
END

$$ language plpqsql