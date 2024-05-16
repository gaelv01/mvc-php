<?php
# Este index.php es el unico punto de acceso a la aplicacion.
# En este archivo, a diferencia de hacer sistemas PHP tradicionales,
# se hace uso de importaciones unicamente
# para organizar la aplicacion.
# Ves el archivo .htaccess?  Es el encargado de redirigir todas las peticiones a este index.php

# Importamos el autocargador. 
require_once '../autoload.php';
# Importamos el archivo de rutas.
require_once '../routes/web.php';
