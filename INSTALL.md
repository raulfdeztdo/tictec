###################

TBW 2020 - Grupo 2 - Lunes 8:30-10:30

###################

Tic Tec - rft00005 - jsi00001

###################

Como desplegar el proyecto

###################

Descargar el proyecto del repositorio de gitlab, 
descomprimir el archivo TBW1920_2-master-*.zip en
la carpeta de ficheros web de apache. Ej: apache/htdocs/TBW1920_2-master-*
renombrar la carpeta descomprimida TBW1920_2-master-* a 'ci'.

Para configurar la base de datos en PPHPMYADMIN hay que importar

la base de datos desde el fichero TBW1920_2-master-*/db/appdb.slq

y crear en PHPMYADMIN el usuario "appdbuser" con la contraseña

"12qwas" con los privilegios de datos, después de eso la configuración 

del proyecto habra terminado.

Reiniciar Apache.

Para acceder a la pagina web, abrir el navegador y escribir http://localhost/ci/

###################