# Framework MVC de PHP

Este es un framework que permite trabajar con el patrón de diseño "MVC".
El patrón MVC permite trabajar con código más separado en responsabilidades, y fundamenta a la implementación de código más limpio, entendible y escalable. 
Esto es aplicado a PHP, el cual es un lenguaje de programación rico en funcionalidades, pese a que no se use de una manera no tan correcta. Este repositorio pretende fortalecer esta área de oportunidad.

# Cómo instalar

Para instalar este sistema y asegurarse de que corra correctamente, siga estos pasos:

1. Con XAMPP instalado, clone este repositorio en la carpeta `htdocs/`.
2. No intente iniciar el servicio de Apache sin antes realizar esta configuración:
	1. Ejecute el bloc de notas como administrador.
	2. Abra el archivo `hosts`, alojado en la ruta `C:/Windows/System32/drivers/etc/hosts`. Si el archivo no aparece, intente seleccionar Todos los archivos, no solo los .txt.
	3. Agregue la siguiente línea al final del archivo: `127.0.0.1 mvc.test`
	4. Guarde los cambios. Cierre el archivo.
	5. Ahora, busque el directorio `C:/xampp/apache/conf/extra/`. Ubique el archivo: `httpd-vhosts`.
	6. Abra el archivo, y al final, copie las siguientes líneas:

```
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/mvc-php/public/"
    ServerName mvc.test
</VirtualHost>
```

7. Guarde el archivo. 
8. Si el servicio de Apache está iniciado, reinícielo apagándolo y volviéndolo a encender.
9. En cualquier navegador, escriba en la barra de direcciones `mvc.test`
10. Está listo para configurar y codificar en este repositorio.