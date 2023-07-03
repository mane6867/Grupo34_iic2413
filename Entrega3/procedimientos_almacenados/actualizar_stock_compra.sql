CREATE OR REPLACE FUNCTION disminuir_stock()
RETURNS void AS $$
DECLARE 
    tupla RECORD;
BEGIN
    FOR tupla IN SELECT*FROM Carrito LOOP
        UPDATE stock
        SET cantidad = GREATEST(cantidad - 1, 0)
        WHERE id_producto = tupla.id_producto;
    END LOOP;
END
$$ LANGUAGE plpgsql;