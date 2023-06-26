import csv 

with open('Grupo34_iic2413/datos2/comuna_region_cliente.csv','r') as info:
    pares_clientes = []
    for linea in info:
        comuna_region = linea[:-1].split(";")
        pares_clientes.append(comuna_region)
info.close()
# for par in pares_clientes:
#     print(par)


with open('Grupo34_iic2413/datos2/comuna_region_id.csv','r') as ids:
    id_ubi_region_comuna = []
    for linea in ids:
        ubi_comuna_region = linea[:-1].split(";")
        id_ubi_region_comuna.append(ubi_comuna_region)
ids.close()
# for ids in id_ubi_region_comuna:
#     print(ids)

id_ubicaciones = []
for par in pares_clientes:
    encontrado = False
    for ids in id_ubi_region_comuna:
        if par[0] == ids[0] and par[1] == ids[1]:
            # guardar el id_ubi
            id_ubicaciones.append(ids[2])
            encontrado = True
id_ubicaciones.append("234")
# print(id_ubicaciones)


# Escribir archivo csv
with open('id_ubi_clientes.csv', 'w') as myfile:
    # wr = csv.writer(myfile, quoting=csv.QUOTE_ALL)
    for id in id_ubicaciones:
        myfile.write(f"{id}\n")
myfile.close()