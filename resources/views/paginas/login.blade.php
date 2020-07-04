@extends ("layout")
@section ("menu")
    <form class="form-inline login-form input-group-sm justify-content-sm-end" action="/examples/actions/confirmation.php"
          method="post">
        <div class="input-group">
            <input type="text" class="form-control col-sm-6  justify-content-sm-end" placeholder="Username" required>
            <input type="text" class="form-control col-sm-6  justify-content-sm-end" placeholder="Password" required>
        </div>
        <div class="input-group">
            <button type="submit" class="btn btn-primary m-2">Login</button>
            <button type="submit" class="btn btn-primary m-2">Registrarse</button>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        </div>
    </form>
@endsection

@section("contenido")
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100  img-fluid" src="{{asset("./imagenes/carrusell1.jpeg")}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset("./imagenes/carrusell2.jpeg")}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset("./imagenes/carrusell3.jpeg")}}" alt="Third slide">
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
