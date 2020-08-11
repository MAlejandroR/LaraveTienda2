# Contenido principal
Esta va a ser una sección que va a tener mucho dinamismo en lo que es nuestra aplicación.

Para ello en la plantilla, crearemos una sección, que iremos completando en cada página, según corresponda.

En la página principal pondremos un carrusell, sacado de una plantilla de bootstrap.
Para ello buscamos tres imágenes en internet que serán nuestras tres pantallas en el carrusell. Haremos que tengan el alto y ancho de esta sección

En la  plantilla principal, agregaremos

<code>

    <!-- En la sección header del html -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ...   -->
     <main>
            @yield("contenido")
        </main>
</code>    

Entonces creamos un nuevo fichero __blade__ con el código mostrado a continuación.
<code>

    @extends(".layouts.layout_main_5");
    
    @section("contenido")
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner carousel-fade ">
                <div class="carousel-item active">
                    <img class="d-block w-100 h-100  img-fluid" src="{{asset("./imagenes/carrusell1.jpeg")}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="{{asset("./imagenes/carrusell2.jpeg")}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="{{asset("./imagenes/carrusell3.jpeg")}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    @endsection

</code>

Está pendiente  optimizar que los ficheros  __js__ necesarios para el carrusell,  solo se carguen si cargo los carruseles.
Por otro lado está pendiente usar solo __vue__, y no __jquery__; para ello tendría que cargar __bootstrap-vue__, pero tras dos intentos, no me ha funcionado y he decidido no dedicar de momento más tiempo a eso, ya que no es el objetivo de este proyecto.

Para cargar la plantilla, añadimos la siguiente entrada en las rutas, manteniendo los nombres, como solo uso bootstrap para esta sección, no hya que aportar nada de __css__

<code>

    Route::view("5main", "p5_main");
</code>

Nos qudan las siguientes pantallas

![Pantalla principal con carrusel en la transparencia 1](./../public/imagenes/imagenes_apuntes/main_carrusell1.png)
![Pantalla principal con carrusel en la transparencia 2](./../public/imagenes/imagenes_apuntes/main_carrusell2.png)
![Pantalla principal con carrusel en la transparencia 3](./../public/imagenes/imagenes_apuntes/main_carrusell3.png)
