<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'eShared') }}</title>

    <!-- Styles -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
</head>
@if (Request::path()=='home')
<body onload="onload();"class="bg-secondary">
@elseif (Request::path()=='/')
<body class="bg-secondary" onload="checkCookie();">
@else
<body class="bg-secondary">
@endif

    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" id="nom" href="#">{{ config('app.name', 'eShared') }}</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <!-- ESQUERRA -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Inici <span class="sr-only">(actual)</span></a>
              </li>
              {{-- Provisional --}}
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Maquetació Web (entrega)
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('enric') }}">Enric</a>
                  <a class="dropdown-item" href="{{ url('adria') }}">Adrià</a>
                  <a class="dropdown-item" href="{{ url('roger') }}">Roger</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ url('contactar') }}">Contactar</a>
                </div>
              </li>
            </ul>
            <!-- DRETA -->
            <ul class="navbar-nav flex-row ml-md-auto d-md-flex">
              <!-- Enllaços autenticació -->
              @guest
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}" data-toggle="tooltip" data-placement="bottom" title="Accedir"><i class="fas fa-sign-in-alt"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}" data-toggle="tooltip" data-placement="bottom" title="Registrar-se"><i class="fas fa-user-plus"></i></a>
                </li>
              @else
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Tancar sessió
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </div>
                </li>
              @endguest
            </ul>
          </div>
        </nav>
        @yield('content')
    </div>
    <!-- PEU DE PÀGINA -->
    <footer class="bg-cream-dark h-25">
      <div class="container">
        <div class="row">
          <div class="col">
            <p class="py-4 my-0">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2018 Ice Cream Monstià. Tots els drets reservats.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/lang/summernote-ca-ES.min.js"></script>
</body>
</html>
