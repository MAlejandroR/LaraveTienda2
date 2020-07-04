<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/estilo.css")}}">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<main class=container>
    <header>
        <a href="localhost:8000"><img class="logo" src="{{asset("./imagenes/logo.jpeg")}}" alt="Logo"></a>
        </div>
        <div class=titulo>
            <h1>CPI FP Los Enlaces</h1>
        </div>
        <div class=menu>
            @yield ("menu")
        </div>
    </header>
<menu>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <button class="btn btn-info mr-2" type="button">Tienda</button>
            <button class="btn btn-danger mr-2" type="button">Conócenos</button>
            <button class="btn btn-dark mr-2" type="button">Contacta</button>
        </form>
    </nav>
</menu>
    <main>
       @yield ("contenido")
    </main>
    <footer>
       @ CPI FP Los Enalces     Tf   Fax   Diseño de DAW
    </footer>

    </div>
</body>
</html>
