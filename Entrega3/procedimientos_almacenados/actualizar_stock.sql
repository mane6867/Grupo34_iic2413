CREATE OR REPLACE FUNCTION actualizar_stock(id_tienda INT, id_producto INT, nuevo_stock INT)
RETURNS BOOLEAN AS $$
BEGIN
    UPDATE stock
    SET cantidad = nuevo_stock
    WHERE id_tienda = id_tienda AND id_producto = id_producto;
    
    IF FOUND THEN
        RETURN TRUE;
    ELSE
        RETURN FALSE;
    END IF;
END
$$ LANGUAGE plpgsql;
