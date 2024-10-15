
# COMANDOS.


## Para crear un poryecto en laravel
composer create-project --prefer-dist laravel/laravel Nombre-proyecto

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

# PRIMER SPRINT 
## HISTORIAS A REALIZAR

- Como [recepcionista], quiero [ver las reservas recientes], para poder [confirmar o rechazar estas mismas]
- Como [cliente], quiero [vizualizar las promociones y descuentos], para poder [tomar en cuenta el beneficio]


creamos nuevo branch con nombre de develop, seting - repositorio, en branch defauld poner por defecto el develop
- En protected branch poner develop como protegida
- Allowed to merge poner Manteiners
- push merge, none
- y poner en buton Protegido