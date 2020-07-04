<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# LaravelTienda
Rehacemos la práctica de la tienda usando  laravel y vamos especificando requisitos e implementación
# Creamos el nuevo proyecto
<code>
 laravel new LaravelTienda
</code>
##

## Diseño de la interfaz gráfica
Usamos balsamiq para el diseño gráfico
[Cómo usar balsamiq en ubuntu](https://github.com/balsamiq/balsamiq-wireframes-linux) 
descargamos y ejecutamos con el siguiente comando:

<code>
 get https://raw.githubusercontent.com/balsamiq/balsamiq-wireframes-linux/master/bw.yml -O /tmp/bw.yml && lutris -i /tmp/bw.yml
</code>

### Página principal
![Página principal o layout no conectado](../../storage/app/public/imagenes/mockups/Layout_usuario_no_conectado.png)

Aquí vemos una sección de cabecera, un menú, un contendio y un pie de página 
Si el usuario estuviera conectado sólo cambiará el menú superior
![Página principal o layout usuario conectado](../../storage/app/public/imagenes/mockups/Layout_usuario_conectado.png)
#### Página de tienda
En esta página solo se puede acceder si se está conectado.
![Página principal o layout usuario conectado](../../storage/app/public/imagenes/mockups/tienda.png)
#### Página de imprimir
En esta página solo se puede acceder si se está conectado.
![Página para imprimir la factura](../../storage/app/public/imagenes/mockups/imprimir.png)
#### Página de pagar
En esta página solo se puede acceder si se está conectado.
![Página para pagar](../../storage/app/public/imagenes/mockups/pagar.png)
#### Página contacta
En esta página solo se puede acceder si se está conectado.
![Página para contactar/enviar mensaje](../../storage/app/public/imagenes/mockups/contacta.png)
#### Página conocenos
![Página de conocenos](../../storage/app/public/imagenes/mockups/conocenos.png)
#### Página registrarse
![Página para registrarse](../../storage/app/public/imagenes/mockups/resgistrarse.png)
## Cargar Bootstrap en el proyecto
Vamos a usar bootstrap para partes del diseño de nuestro proyecto. Bootstrap
[Referencia web en la página oficial](https://laravel.com/docs/7.x/frontend)
Instalamos el paquete laravel/ui bien directamente  
<code>
composer require laravel/ui
</code>

 O bien lo incluimos en la sección require de  composer.json y volvemos a orquestar

<pre>
 ``//.....
 "require": {
         "php": "^7.2.5",
         "fideloper/proxy": "^4.2",
         "fruitcake/laravel-cors": "^2.0",
         "guzzlehttp/guzzle": "^6.3",
         "laravel/framework": "^7.0",
         "laravel/tinker": "^2.0",
         "laravel/ui":"^2.0" 
    },``
</pre>

Orquestamos 

<code>
 composer update
</code>

Ahora instalamos bootstrap en local usando artisan, para ello realizamos los siguientes pasos (ver la página oficial para las explicaciones más detalladas) 

<pre>
php artisan ui bootstrap 
npm install
npm run install
</pre>
Una vez realizada estas acciones podemos ver que tenemos disponible en la carpeta 
   ![ficheros creados tras la instalación de bootstrap](../../storage/app/public/imagenes/mockups/bootstrap_js.png)
Ahora para poder usar bootstrap lo único que tenemos que hacer es referenciarlo en el fichero blade

## Realización de las plantillas con blade
 En esta apartado  debemos realizar las plantillas de cada una de los mockups.
 Para ello vamos a crear la plantilla o layout que llevarán todas las página.
  ![Layout general](../../storage/app/public/imagenes/mockups/Layout.png)

# Autentificación
Vamos a usar la autentificación que trae laravel por defecto, luego veremos cómo modificar alguna de estos valores por defecto, como será:
- Cambiar los campos de usuarios registrados
- Cambiar los campos de autentificación
- Camibar el diseño de formuario para login 
##Establecer la autentificación por defecto
Para ello debemos de realizar una serie de pasos muy sencillos.
Primero vamos a instalar esta autentificación para instalar los controladores necesarios
<pre>
 php artisan ui vue --auth
</pre>
Tras haber ejectuado este comando hemos instalado la autentificación qeu por defecto trae Laravel. Con ello tendremos instalado:
 - Rutas. Si abrimos el fichero web.php observamos
   <pre>
     Auth::routes();
     Route::get('/home', 'HomeController@index')->name('home');
   </pre> 
 - Vistas de login y de registro
 ![Vistras creadas para la autentificación](./public/imagenes/imagenes_apuntes/vistas_auth.png)
 - Controlador para instalarlo: __HomeController.php__ y directorio __Auth__
 
 ![Conroladores antes de cargar auth](./public/imagenes/imagenes_apuntes/before__auth.png)
 
 ![Conroladores después  de cargar auth](./public/imagenes/imagenes_apuntes/after_auth.png)
   
__Qué podemos ver que ha ocurrido ahora__
 
 Si miramos __web.php__ vemos que si queremos acceder a /home, primero deemos estar autentificados
 Si abrimos un navegador y escribimos __http://localhost:8000/home, nos redirije automáticamente a una página de logín ya que no estamos logueados
 Este es el efecto del middleware que se ha incluido en __web.php__ a través del controlador HomeController
 <pre>
     public function __construct()
      {
          $this->middleware('auth');
      }
  
      /**
       * Show the application dashboard.
       *
       * @return \Illuminate\Contracts\Support\Renderable
       */
      public function index()
      {
          return view('home');
      }
 </pre> 

Un middleware es un software intermedio que podemos establecer que se ejecute antes o después de una determinada acción
En este caso le decimos que si se solicita una página verfique antes que se esté autentificado, y si no redirigimos a la autentificación de usuario
Una vez que el usuario se haya autentificado devolveremos la página solicitada, en este caso __home__

 ![Solicitud de la pagina](./public/imagenes/imagenes_apuntes/solicitud_home.png)
 
 ![Entrega de login](./public/imagenes/imagenes_apuntes/login.png)

Si damos a registrar nos aparecerá el formulario siguiente

 ![Resgistro](./public/imagenes/imagenes_apuntes/registro.png)

Pero esto no funcionará, ya que primero hemos de crear las tablas en la base de datos para almacenar la información
Para ello, laravel ya trae preparadas unas migraciones por defecto
 ![Migraciones para la autenticación](./public/imagenes/imagenes_apuntes/migraciones_auth.png)
 
Preparamos la base de datos. Para ello establecemos en al fichero de configuración __.env__ la configuracion de nuestra base de datos y de cómo acceder a ella
![configuración de la Conexión a la base de datos](./public/imagenes/imagenes_apuntes/conf_conexion_bd.png)

Y ahora ejecutamos las migraciones, para ello, la primera vez ejectuamos las migraciones
<pre>
php artisan migrate:install
</pre>
Cuyo efecto podemos ver :
![tabla migrations](./public/imagenes/imagenes_apuntes/migrations.png)

Y ahora ejectuamos las migracione que tenemos pendientes que serían las tres que vienen por defecto en laravel para usar la autentificación
<pre>
php artisan migrate
</pre>
![tabla migrations](./public/imagenes/imagenes_apuntes/ejecutar_migraciones_pendientes-png)
Ahora ya podemos registrarnos y ver que funciona el login
![tabla migrations](./public/imagenes/imagenes_apuntes/registrarse.png)
Al aceptar nos informa que estamos registrados
![tabla migrations](./public/imagenes/imagenes_apuntes/registrado.png)
Podemos desloguearnos
![tabla migrations](./public/imagenes/imagenes_apuntes/desloguearse.png)
Y también podemos acceder con login
![tabla migrations](./public/imagenes/imagenes_apuntes/login_2.png)

Ahora viene cuando queremos adaptar este logín a nuestra aplicación, es decir, queremos aprovechar esta infraestructura lógica, pero cambiar básicamente los tres aspectos que hemos comentado anteriormente
1. Formulario de login
2. Campos con los que nos logueamos
3. Campos de registro (Mantenemos este formulario)
### Adaptando el formulario de login
*En este caso no vamos a tener una página con el formulario, si no que es parte de la página principal
El diseño de la página principal sin loguearse es








