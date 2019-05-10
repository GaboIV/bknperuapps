Backend Rest Ful bajo framework PHP -Laravel-

Instalación paso a paso:
1- Descarga el proyecto, dirígete mediante una terminal a la raiz del mismo y ejecuta el comando:

> composer install

2- Crea una base de datos en MySQL (elige un nombre, ejemplo: bknperuapps)

3- Crea un nuevo archivo .env en la raiz del proyecto, y actualiza las credenciales de conexión a la base de datos

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bknperuapps
DB_USERNAME=root
DB_PASSWORD=

Asegúrate de crear un API_PREFIX=api en tu archivo .env, así:

API_PREFIX=api
API_NAME="Laravel API"
API_VERSION=v1
API_DEBUG=false

4- Para migrar la base de datos, utiliza el comando de terminal:

> php artisan migrate

5- Puedes llenar las tablas automáticamente con el siguiente comando:

> php artisan db:seed

6- Para hacer correr el servidor bajo Laravel:

> php artisan serve

Se generará automáticamente un acceso al servidor.

7- Ya puedes probar las funciones del API
