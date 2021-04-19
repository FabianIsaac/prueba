# Prueba

##Pasos para probar

1. En la raiz del proyecto ejecute el comando `composer install` desde la terminal

2. Crear base de datos limpia y recordar el nombre

3. Crear un archivo `.env` en la raiz del proyecto, debe tener los siguientes datos:

```
APP_NAME=Lumen
APP_ENV=local
APP_KEY=EstaEsLaLlaveSecreta
APP_DEBUG=true
APP_URL=http://localhost
APP_TIMEZONE=UTC

LOG_CHANNEL=stack
LOG_SLACK_WEBHOOK_URL=

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

CACHE_DRIVER=file
QUEUE_CONNECTION=sync
```

4. en el archivo `.env` llenar `DB_DATABASE` (aqui va la bd creada anteriormente), `DB_USERNAME` y `DB_PASSWORD` con los datos correctos de su base de datos


5. En la raiz del proyecto ejecutar los comandos:

```
php artisan migrate
php artisan db:seed
php -S localhost:8000 -t public
```

Nota: El primer comando crea las tablas necesarias, el segundo comando las pobla con datos y el tercer comando levanta un servidor de pruebas