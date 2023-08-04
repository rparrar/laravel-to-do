<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Acerca de este sistema

Es un administrador de tareas pendientes, o TO-DO.

Está escrito en php con **[Laravel Framework 10.1.3](https://laravel.com )** y con **[Livewire laravel](https://laravel-livewire.com/)**

## Que tiene este sistema?

- Ingreso por usuarios, mediante autenticación de laravel UI, por lo tanto el usuario se registra, y luego los To-Do quedan asociados a él mediante relación uno a muchos.

- Permite crear tareas pendientes (To-Do), quedando en un panel a la izquierda de la pantalla en monitores, arriba en celulares.

- En esta columna, se puede elegir 2 opciones, eliminar la tarea, o marcarla como completada.

- Un panel donde aparecen las tareas completadas, con 2 opciones, devolverla a pendientes, o eliminarla, llama al mismo método del panel 1.

## Licencia

De libre uso, si te sirve, lo quieres modificar, vender, arrendar, etc. utilizalo sin miedo. Saludos.

# Capturas

<p align="center">
    <img src="https://www.rpi.cl/git-img/laravel-to-do/1-register2.png" width="400" alt="cap 1">
</p>
<p align="center">
    <img src="https://www.rpi.cl/git-img/laravel-to-do/2-login2.png" width="400" alt="cap 2">
</p>
<p align="center">
    <img src="https://www.rpi.cl/git-img/laravel-to-do/3-dashboard2.png" width="400" alt="cap 3">
</p>
<p align="center">
    <img src="https://www.rpi.cl/git-img/laravel-to-do/4-addtodo2.png" width="400" alt="cap 4">
</p>
<p align="center">
    <img src="https://www.rpi.cl/git-img/laravel-to-do/5-alltodo2.png" width="400" alt="cap 5">
</p>

# Si quieres probar este sistema en tu PC. #

-  Clonar o descargar repositorio
```
$ git clone https://github.com/rparrar/laravel-to-do.git
```
-  Actualizar dependencias de laravel
```
$ composer update
```
-  Actualizar dependencias de node
```
$ npm install 
```
-  Crear un nuevo archivo .env
```
$ cp .env.example .env
```
-  Generar una llave de encriptación en el archivo .env
```
$ php artisan key:generate
```
-  Crear una base de datos
```
Puede ser en phpmyadmin u otro administrador de bases de datos
```
-  Actualizar variables de base de datos y usuario
```
DB_DATABASE =   base de datos creada
DB_USERNAME =   usuario bases de datos
DB_PASS=    =   contraseña usuario bases de datos
```
-  Correr las migraciones
```
$ php artisan migrate
```
-  Iniciar el servidor local node (vite) en una ventana de comandos
```
npm run dev
```
-  Iniciar el servidor local (php laravel) en otra ventana de comandos
```
$ php artisan serve
```
- Si quieres dejar de usar npm run dev
```
$ npm run build
```
