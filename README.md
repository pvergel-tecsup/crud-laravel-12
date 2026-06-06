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

## Habilitación de la aplicación
Siga los siguiente pasos para habilitar la aplicación:

### Paso 1: Crear una base de datos en blanco
Cree una base de datos para la aplicación. No es necesario crear tabla alguna.

### Paso 2: Genere el archivo .env
Cree el archivo .env en base al archivo .env.example.

### Paso 3: Configurar la conexión a la base de datos
En su archivo .env coloque la conexión a la base de datos creada en el paso 1.

### Paso 4: Genere la clave de seguridad (APP_KEY) de su aplicación
En la carpeta del proyecto Laravel cree la llave (key) de seguridad de su aplicación ejecutando el siguiente comando:
> php artisan key:generate

Esto colocará la llave de seguridad en la variable APP_KEY en su archivo .env

### Paso 5: Genere las dependencias y librerías externas de su aplicación (carpeta "vendor")
En la carpeta del proyecto Laravel genere la carpeta "vendor" con las dependencias y librerías de la aplicación ejecutando el siguiente comando:
> composer install

### Paso 6: Ejecute las migraciones
En la carpeta del proyecto Laravel ejecute el siguiente comando:
> php artisan migrate

Esto creará las tablas necesarias para ejecutar el proyecto Laravel.

### Paso 7: Ejecute los seeders
En la carpeta del proyecto Laravel ejecute el siguiente comando:
> php artisan db:seed

Esto poblará las tablas creadas en el paso anterior con datos de prueba.

## Paso 8: Habilitación de Tailwind
Para poder instalar y utilizar Tailwind CSS en el proyecto, ejecute el siguiente comando:
> npm install

Si se está trabajando cen un ambiente de desarrollo, ejecutar
> npm run dev

Si desea trabajar en un ambiente de producción, ejecutar
> npm run build

