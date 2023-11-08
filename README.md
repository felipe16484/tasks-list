# Lista de Tareas
Proyecto realizado para prueba técnica.

- Variables de Entorno para Conexión con DB

Los servicios de la MySQl y Apache se utilizaron por medio de Xampp

APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=


- Variables de Entorno para Servicio de correos

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=bebb2f896e53c5
MAIL_PASSWORD=3bf11e85b2149f
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="pruebat.felipec@laravel.com"
MAIL_FROM_NAME="Prueba Felipe"

- Comandos utilizados para instlar paquetes y dependencias para correr el proyecto

composer install
npm install
php artisan key:generate
php artisan migrate --seed

php artisan serve / npm run dev

