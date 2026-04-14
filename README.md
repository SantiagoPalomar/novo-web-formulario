# Novo Parking - Registro de Facturacion Electronica

Pagina web corporativa con formulario de registro de datos para facturacion electronica.

## Tecnologias

- **Backend:** PHP 8.2 con Laravel 12
- **Base de datos:** MySQL 8.0
- **Frontend:** HTML5, CSS3, JavaScript

## Funcionalidades

- Pagina corporativa de Novo Parking
- Formulario de registro dinamico (persona natural / empresa)
- Calculo automatico del digito de verificacion para NIT
- Validaciones en frontend y backend
- Politica de tratamiento de datos personales
- Diseño responsive adaptable a dispositivos moviles
- Identidad visual de Novo Parking

## Instalacion

### 1. Clonar el repositorio
~~~bash
git clone https://github.com/SantiagoPalomar/novo-web-formulario.git
cd novo-web-formulario
~~~

### 2. Instalar dependencias
~~~bash
composer install
~~~

### 3. Configurar el entorno
~~~bash
cp .env.example .env
php artisan key:generate
~~~

Editar el archivo `.env` con las credenciales de la base de datos:
~~~
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=novo_formulario
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contrasena
~~~

### 4. Ejecutar migraciones
~~~bash
php artisan migrate
~~~

### 5. Iniciar el servidor
~~~bash
php artisan serve
~~~

Acceder en: **http://127.0.0.1:8000**

## Estructura del proyecto
~~~
novo-web-formulario/
├── app/
│   ├── Http/Controllers/TerceroController.php
│   └── Models/Tercero.php
├── database/
│   └── migrations/
│       └── create_terceros_table.php
├── public/
│   ├── css/
│   │   ├── formulario.css
│   │   ├── welcome.css
│   │   └── inversiones.css
│   ├── js/
│   ├── fonts/
│   └── images/
├── resources/
│   └── views/
│       ├── welcome.blade.php
│       ├── novo-parking.blade.php
│       └── formulario.blade.php
└── routes/
    └── web.php
~~~

## Desarrollado por

**Santiago Palomar Acosta**
