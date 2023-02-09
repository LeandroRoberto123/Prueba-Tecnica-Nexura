<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

----------

# Getting started

## Instalación

Consulte la guía de instalación oficial de laravel para conocer los requisitos del servidor antes de comenzar. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

El proyecto se realizo en Laravel v9.

Laravel 9.x requiere una versión mínima de PHP de 8.0.

Clonar el repositorio

    git clone https://github.com/LeandroRoberto123/Prueba-Tecnica-Nexura.git

Cambiar a la carpeta del repositorio

    cd nexura_technical_test
    
Instalar composer si no se tiene instalado 

    [Download Composer](https://getcomposer.org/download/) 
    
 Instalar Node.js si no se tiene instalado 

    [Download Node.js](https://nodejs.org/es/) 
    
Instala todas las dependencias usando composer

    composer install
    composer update
    npm install

Copie el archivo env de ejemplo y realice los cambios de configuración necesarios en el archivo .env

    cp .env.example .env

Generar una nueva clave de aplicación

    php artisan key:generate

Ejecute las migraciones de la base de datos (**Establezca la conexión de la base de datos en .env antes de migrar**)

    php artisan migrate

Inicie el servidor de desarrollo local de laravel y de vite.js

    php artisan serve
    npm run dev

Ahora puede acceder al servidor en http://localhost:8000

  
**Asegúrese de configurar la información de conexión de la base de datos correcta antes de ejecutar las migraciones** [Variables de entorno](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding

**Rellene la base de datos con datos iniciales tablas areas y roles.**

Ejecute el sembrador de base de datos y listo.

    php artisan db:seed

***Note*** : Se recomienda tener una base de datos limpia antes de sembrar. Puede actualizar sus migraciones en cualquier momento para limpiar la base de datos ejecutando el siguiente comando

    php artisan migrate:refresh

## Carpetas

- `app` - Contiene todos los modelos Eloquent
- `app/Http/Controllers/` - Contiene todos los controladores
- `app/Http/Middleware` - Contiene el middleware de autenticación
- `config` - Contiene todos los archivos de configuración de la aplicación
- `database/migrations` - Contiene todas las migraciones de bases de datos.
- `database/seeds` - Contiene el sembrador de base de datos.
- `routes` - Contiene todas las rutas
