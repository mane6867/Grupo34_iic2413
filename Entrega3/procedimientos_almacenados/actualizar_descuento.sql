CREATE OR REPLACE FUNCTION actualizar_descuento(tienda INT, producto INT, nuevo_descuento INT)
RETURNS BOOLEAN AS $$
BEGIN



    UPDATE stock
    SET descuento = nuevo_descuento
    WHERE stock.id_tienda = tienda AND stock.id_producto = producto;
    
    IF FOUND THEN
        RETURN TRUE;
    ELSE
        RETURN FALSE;
    END IF;
END
$$ LANGUAGE plpgsql;