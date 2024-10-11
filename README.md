
# COMANDOS.

## correr laravel
php artisan serve
## correr migraciones
php artisan migrate

## Crear modelo con migracion contralador resource seeder y factpry
php artisan make:model Agenda -mcrsf

## borrar todo correr migraciones y seeder
php artisan migrate:fresh --seed

## ver las rutas de la aplicacion
php artisan route:list 


## para clonar
composer install
## modificar el archivo .env.axample a .env



## Para crear las tablas y migrar los datos 
Necesitamos configurar los archivos
- Carpeta modelos-> Promocion.php
- Todo dentro la carpeta database
- PromocionFactory.php, archivo migraciones, PromocionSeeder y DataBaseSeeder