# Header

 Va a ser la __Cabecera__ de la pantalla.
 En ella vamos a establecer un  login, un título y una sección para menú de login o bien nombre de usuario logueado.
 Establecemos pues tres secciones distribuidas horizontalmente como mostramos en la siguiente imagen
## Logo
  Vamos a usar la imagen del cpifp los enlaces. La descargo de la página oficial 
    http://www.cpilosenlaces.com/wp-content/uploads/2014/11/logo_cpifp-300x116.png
  Guardo la imagen en un subdirectorio del dir __storage__.
  Este directorio, como no está en la carpeta public, se debe de hacer un enlace directo a la carpeta public para tenerlo disponible.
  Existe un comando que crea directamente el enlace directo   https://laravel.com/docs/7.x/filesystem#the-public-disk
  <pre>
   php artisan storage:link
  </pre>
  Le damos un poco de estilo para que no se salga de su contenedor __header__ si redimensionamos y para que esté alineado a la izquierda
  <pre>
  header >.logo{
      margin: 10px;
      margin-left: 20px;
      max-height: 100%;
      }
  </pre>
  En header modificamos la distribución de elementos
  <pre>
  header {
      //...
      justify-content: space-between;
      align-items: center;
  </pre>
   ![Logo de cpi los enlaces](./../storage/app/public/imagenes/logo_cpifp-300x116.png)
  #### Título
  
  En este caso simplemente escribimos el texto __CPIFP Los Enlaces__ . Le damos un poco de estilo color, inclinado.
  <pre>
  header >.titulo{
      margin: 10px;
      margin-right: 20px;
      max-height: 100%;
      color :rgb(228, 86, 20);
      font-size: 3em;
      font-weight: bold;
      font-style: oblique;
  } 
  </pre>
## Login o logueado
  
  En este caso en la plantilla querríamos hacer algo del timp
  <pre>
  if (usuario logueado){
     mostar nombre
     mostar botón de deslogueo
  else
     mostar formulario login (cajas de texto y botón login)
     mostrar botón registar    
  }
  </pre>
  Laravel tiene unas directivas en blade que realizan esta acción 
  __@auth__ y __@guest__. Estas directivas equivalen a verificar si el usuario está o no autentificado 
   
       https://laravel.com/docs/master/blade#if-statements, ver   authentication directive
  
  Por lo tanto lo único que hemos de hacer en la plantilla escribir el código. Posteriormente en el apartado de autentificación probaremos su uso, de momento solo estamos en diseño 
   <pre>
  @guest
  {{--sección de no autentificación--}}   
  @endguest
  @auth
  {{--sección de autentificación--}}
  @endauth
  </pre> 
 
 Ahora el código que ponemos (usamos un poco de bootstrap) para cada parte será el siguiente
 
 De momento en el action del _si estoy autenticado_ será invocar a una ruta llamada __login__ que en la sección de autenticación especificaremos   
 
 <code>
 
    @guest
       <form class="form-inline login-form d-flex flex-column justify-content-sm-end align-items-end " action="{{route("login")}}" method="post">
         <div class="input-group input-group-sm justify-content-sm-end d-flex flex-row  ">
               <input type="text" class=" p2 form-control col-sm-6 m-2" placeholder="Username" required>
               <input type="text" class="p2 form-control col-sm-6  m-2" placeholder="Password"required>
         </div>
         <div class="input-group-sm justify-content-sm-end d-flex flex-row   ">
             <button type="submit" class="p2 btn btn-primary m-2">Login</button>
             <button type="submit" class="p2 btn btn-primary m-2">Registrarse</button>
         </div>
      </form>
    @endguest
    @auth
       <!--Código si está atentificado --> 
    @endauth
 </code>
   Podemos ver la siguiente imagen del menú de login
  ![Imagen de login](./../public/imagenes/imagenes_apuntes/menu_login.PNG)
 
 En caso de estar conectado, debemos mostar el nombre del usuario conectado y la opciòn de desconexión
 
 Para acceder al nombre del usuario conectado en la vista, podemos acceder a la facade __Auth__ . En este caso los datos del usuario estarán en la tabla __user__, y el nombre será el campo __name__
 
 Todos estos aspectos se considerarán en la sección de autentificación.
 
 <code>
 
    @auth
     Auth::user()->name
      <!--Código si está atentificado --> 
     @endauth
 
 </code> 
 
[Volver a la página diseño de pantallas](./diseno_pantallas.md)
