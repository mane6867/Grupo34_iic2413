CREATE SEQUENCE secuencia_compras;
CREATE SEQUENCE secuencia_despachos;

CREATE OR REPLACE FUNCTION actualizar_compras (nombre_cliente VARCHAR, fecha_entregada DATE)
RETURNS void AS $$
DECLARE
    dato1 INTEGER;
    dato2 INTEGER;
    siguiente_numero_compras INTEGER;
    siguiente_numero_despachos INTEGER;
    tupla RECORD;
BEGIN
    SELECT id_cliente INTO dato1 FROM Clientes 
    WHERE nombre = nombre_cliente;

    siguiente_numero_compras := NEXTVAL('secuencia_compras');

    INSERT INTO Compras values(siguiente_numero_compras, 0, dato1, CURRENT_DATE);

    SELECT id_compra INTO dato2 FROM Compras 
    WHERE id_compra = siguiente_numero_compras;

    siguiente_numero_despachos := NEXTVAL('secuencia_despachos');

    INSERT INTO Despachos values(siguiente_numero_despachos, dato2, fecha_entregada);

    FOR tupla IN SELECT * FROM Carrito LOOP
        INSERT INTO detalle_compra values(tupla.id_producto, siguiente_numero_compras, 1);
    END LOOP;

END
$$ LANGUAGE plpgsql;