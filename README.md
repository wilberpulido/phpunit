### Configuración de phpunit para realizar en test.

En el archivo phpunit.xml le digo phpunit donde estan mis test.

Por convesion, el test llevará el mismo nombre de la clase que va a probar agregando Test al final. Ejemplo, ValidateTest.php prueba a Validate.php

Para correr los test, se hará por medio de correr en la consola: vendor/phpunit/phpunit/phpunit

Los test se hacen primero, y se configura el resultado que necesito obtener de cada método.
