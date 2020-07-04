<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("./css/estilo2.css")}}">

</head>
<body>
<div class="container">
    <header>
        <img class=logo src="{{asset("./storage/imagenes/logo_cpifp-300x116.png")}}" alt="Logo enlaces">
        <h1 class="titulo">CPIFP Enlaces</h1>
        <div id="login">
            @auth
                <form action="{{route("login")}}" method="POST">
                    <div class="datos">
                        <label for="user">Usuario</label>
                        <input type="text" name="user" id="user">
                        <label for="pass">Password</label>
                        <input type="text" name="pass" id="user">
                    </div>
                    <div class="submit">
                        <input type="submit" value="Validar" name="submit">
                        <input type="submit" value="Registrarse" name="submit">
                    </div>
                </form>
            @else
                <div class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{-- Auth::user()->name --}} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>

                {{--si estoy logueado muestro nombre y logout si no formulario de login --}}
            @endauth
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
