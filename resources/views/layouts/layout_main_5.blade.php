<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("./css/app.css")}}">
    <link rel="stylesheet" href="{{asset("./js/app.js")}}">
    <link rel="stylesheet" href="{{asset("./css/4_menu.css")}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>App tienda</title>
</head>
<body>
<div class="container_main">
    <header>

        <!-- El logo -->
        <img class="logo" src="{{asset("storage/logo_cpifp-300x116.png")}}" alt="Logo de imágenes"/>


        <div class="titulo">
            <h1>CPIFP Los Enlaces</h1>
        </div>
        <div class="usuario">
        @guest <!--Si no estoy logueado-->
            <form class="form-inline login-form d-flex flex-column justify-content-sm-end align-items-end "
                  action="{{route("login")}}"
                  method="post">
                <div class="input-group input-group-sm justify-content-sm-end d-flex flex-row  ">
                    <input type="text" class=" p2 form-control col-sm-6 m-2" placeholder="Username"
                           required>
                    <input type="text" class="p2 form-control col-sm-6  m-2" placeholder="Password"
                           required>
                </div>
                <div class="input-group-sm justify-content-sm-end d-flex flex-row   ">
                    <button type="submit" class="p2 btn btn-primary m-2">Login</button>
                    <button type="submit" class="p2 btn btn-primary m-2">Registrarse</button>
                </div>
            </form>
            @endguest
            @auth
                <h2>Datos de conectado</h2>
            @endauth

        </div>
    </header>
    <nav class="menu">
        <a  class="rojo" href="#">Tienda</a>
        <a  class="verde" href="#">Conócenos</a>
        <a  class="azul" href="#">Contacta</a>
    </nav>

    <main>
        @yield("contenido")
    </main>
    <footer>
        <h1>Pie de página</h1>
    </footer>


</div>


</body>
</html>
