CREATE OR REPLACE FUNCTION actualizar_stock(tienda INT, producto INT, nuevo_stock INT)
RETURNS BOOLEAN AS $$
BEGIN
    UPDATE stock
    SET cantidad = nuevo_stock
    WHERE stock.id_tienda = tienda AND stock.id_producto = producto;
    
    IF FOUND THEN
        RETURN TRUE;
    ELSE
        RETURN FALSE;
    END IF;
END
$$ LANGUAGE plpgsql;
