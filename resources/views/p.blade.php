<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset("./css/app.css")}}">

    <link rel="stylesheet" href="{{asset("./css/estilo2.css")}}">

</head>
<body>
<div class="container_main">
    <header>
        <img class=logo src="{{asset("./storage/imagenes/logo_cpifp-300x116.png")}}" alt="Logo enlaces">
        <h1 class="titulo">CPIFP Enlaces</h1>
        <div id="login">
            @guest
                <form class="form-inline login-form d-flex flex-column justify-content-sm-end align-items-end "
                      action="{{route("acceso")}}"
                      method="post">
                    <div class="input-group input-group-sm justify-content-sm-end d-flex flex-row  ">
                        <input type="text" class=" p2 form-control col-sm-6 m-2" placeholder="Username">
                        <input type="text" class="p2 form-control col-sm-6  m-2" placeholder="Password">
                    </div>
                    <div class="input-group-sm justify-content-sm-end d-flex flex-row   ">
                        <button type="submit" class="p2 btn btn-primary m-2">Login</button>
                        <button type="submit" class="p2 btn btn-primary m-2" name="submit" value="registrarse">Registrarse</button>
                    </div>
                </form>
            @else

            @endguest
        </div>
    </header>
    <nav>
        <h1>Menu</h1>
    </nav>
    <main>
        <h1>Contenido principal</h1>
    </main>
    <footer>
        <h1>Pie de página</h1>
    </footer>
</div>
</body>
</html>
