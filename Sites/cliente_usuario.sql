CREATE OR REPLACE FUNCTION

importar_cliente (nombre varchar contrasena varchar tipo varchar)

RETURN BOOLEAN AS $$

BEGIN
insert into personas values(rut,nombre,apellido);
END

$$ language plpqsql