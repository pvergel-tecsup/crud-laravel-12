# CRUD (Laravel 12)

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## License

*The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)*.

## Sobre el proyecto

El proyecto presenta dos CRUD para dos tablas: Categoria y Producto.

Estructura de las tablas
Categoria
- id
- descripcion

Producto
- id_producto
- nombre
- marca
- precio
- stock
- id_categoria


Utliza [Tailwind CSS](https://tailwindcss.com/) para el diseño de las vistas.

Para mostrar y ocultar los mensajes se utiliza [Alpine.js](https://alpinejs.dev/start-here).

## Creación de la base de datos
Siga los siguiente pasos para habilitar la base de datos de la aplicación:

### Paso 1: Crear una base de datos en blanco
Cree una base de datos para la aplicación. No es necesario crear tabla alguna.

### Paso 2: Configurar la conexión a la base de datos
En su proyecto Laravel coloque la conexión a la base de datos creada en el paso anterior.

### Paso 3: Correr las migraciones
En la carpeta del proyecto Laravel ejecute el siguiente comando:
> php artisan migrate

Esto creará las tablas necesarias para ejecutar el proyecto Laravel.

### Paso 4: Correr los seeders
En la carpeta del proyecto Laravel ejecute el siguiente comando:
> php artisan db:seed

Esto poblará las tablas creadas en el paso anterior con datos de prueba.

## Habilitación de Tailwind
Para poder instalar y utilizar Tailwind CSS en el proyecto, ejecute el siguiente comando:
> npm install

Si se está trabajando cen un ambiente de desarrollo, ejecutar
> npm run dev

Si desea trabajar en un ambiente de producción, ejecutar
> npm run build

