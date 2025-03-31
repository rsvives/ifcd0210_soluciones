# Lista de la compra

Leyendo la información de un fichero json, crear un html.

### Pasos

1. Leer el fichero con la función `file_get_contents('ruta_al_fichero')` y guardarlo en una variable. Una vez leido, comprobar con un `var_dump` si funciona. Es probable que falle por motivos de permisos. Para solventarlo, es necesario otorgar permisos de lectura a todos los archivos que se encuentren en la carpeta (buscar en google)

2. Una vez leido el contenido, es necesario transformarlo a un array que se pueda iterar, para lo cual se utilizará la función `json_decode($texto)`. El resultado (un array) de dicha función se almacenará en una variable simplemente al igualar una variable a la función. Ej: ` $array = json_decode($texto)`

3. Iterar la variable para ir generando un html de manera dinámica con un foreach

4. Opcional: Mostrar el precio total de la lista de la compra