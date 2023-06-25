import csv 

with open('Grupo34_iic2413/datos2/obtencion_datos/direcciones_tiendas.csv','r') as info:
    direcciones = []
    for linea in info:
        calle_num_ubi = linea[:-1].split(";")
        direcciones.append(calle_num_ubi)
    direcciones[-1] = ['Monte Ne', '3412', '671']
info.close()
# for direccion in direcciones:
#     print(direccion)
# calle - numero - id_ubi



with open('Grupo34_iic2413/datos2/direcciones.csv','r') as ids:
    id_ubi_calle_num = []
    for linea in ids:
        id_ubi_calle_num.append(linea[:-1].split(";"))
    id_ubi_calle_num[-1] = ['1003', '671', 'Monte Ne', '3412']
ids.close()
# for ids in id_ubi_calle_num:
#     print(ids)
# id_dir - id_ubi - calle - numero


id_direcciones = []
for direccion in direcciones:
    for d in id_ubi_calle_num:
        if direccion[0] == d[2] and direccion[1] == d[3] and direccion[2] == d[1]:
            # guardar el id_direccion
            id_direcciones.append(d[0])
print(id_direcciones)

# Escribir archivo csv
with open('Grupo34_iic2413/datos2/obtencion_datos/ids_direcciones_tiendas.csv', 'w') as file:
    for id in id_direcciones:
        file.write(f"{id}\n")
file.close()