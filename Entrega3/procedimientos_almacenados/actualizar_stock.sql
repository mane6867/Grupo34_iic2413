CREATE OR REPLACE FUNCTION

actualizar_stock (id_tienda INT, id_producto INT, nuevo_stock INT)

RETURNS BOOLEAN AS $$

BEGIN

    UPDATE stock SET nuevo_stock 
    WHERE (SELECT id_stock FROM stock WHERE stock.id_tienda = id.tienda 
            AND stock.id_producto = id_producto) = stock.id_stock

END

$$ language plpgsql