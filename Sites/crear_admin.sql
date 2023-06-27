CREATE OR REPLACE FUNCTION

crear_admin (nombre varchar, contrasena varchar, tipo varchar)

RETURNS void AS $$

BEGIN
    -- verificar si existe o no el admin 
    IF 'ADMIN;admin;Admin' not in usuarios THEN
        insert into usuarios values('ADMIN','admin','Admin');
    END IF;
    -- clientes a usuarios
END

$$ language plpqsql