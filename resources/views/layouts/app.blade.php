<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'eShared') }}</title>

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('icons/site.webmanifest') }}">
  <link rel="mask-icon" href="{{ asset('icons/safari-pinned-tab.svg') }}" color="#f2f698">
  <link rel="shortcut icon" href="{{ asset('icons/favicon.ico') }}">
  <meta name="msapplication-TileColor" content="#f2f698">
  <meta name="msapplication-config" content="{{ asset('icons/browserconfig.xml') }}">
  <meta name="theme-color" content="#f2f698">

  <!-- Styles -->
  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="{{ asset('js/bootstrap-rating-input.js') }}"></script>
  <link href="{{ asset('css/bsadmin.css') }}  " rel="stylesheet">

  <script src="{{asset('js/bootstrap-rating-input.min.js')}}"></script>
    <!-- cookie consent -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#eaf7f7",
          "text": "#5c7291"
        },
        "button": {
          "background": "#56cbdb",
          "text": "#ffffff"
        }
      },
      "content": {
        "message": "Aquest lloc web empra cookies. Si segueixes navegant les estaràs acceptant.",
        "dismiss": "Ok!",
        "link": "Saber més",
        "href": "{{ url('legal') }}"
      }
    })});
  </script>
</head>
<body class="bg-secondary">
  <div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-2">
      @guest
        <a class="navbar-brand" data-toggle="tooltip" data-placement="top" title="Compartir és aprendre" id="nom" href="{{ url('/') }}">{{ config('app.name', 'eShared') }}  </a>
      @endguest
      @auth
        <a class="navbar-brand" data-toggle="tooltip" data-placement="top" title="Compartir és aprendre"id="nom" href="{{ route('home') }}">{{ config('app.name', 'eShared') }}</a>
      @endauth
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <!-- ESQUERRA -->
        @role('admin|moderator')
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-users"></i> Usuaris
            </a>
            <div class="dropdown-menu shadow-4" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ action('UserController@index') }}">Veure usuaris</a>
              <a class="dropdown-item" href="{{ action('UserController@create') }}">Crear usuari</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-align-justify"></i> Categories
            </a>
            <div class="dropdown-menu shadow-4" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ action('CategoriesController@index') }}">Veure categories</a>
              <a class="dropdown-item" href="{{ action('CategoriesController@create') }}">Crear categories</a>
            </div>
          </li>
        </ul>
        @endrole
        <!-- DRETA -->
        <ul class="navbar-nav ml-auto">
          <!-- Enllaços autenticació -->
          @guest
            <li><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Accedir</a></li>
            <li><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Registrar-se</a></li>
          @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right shadow-4" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ action('UserProfileController@show', ['id' => Auth::user()->id]) }}" >
                  Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fas fa-power-off"></i> Tancar sessió
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
  <footer class="bg-cream-dark">
    <div class="container-fluid">
      <div class="row">
        <div class="col pt-3 pb-2">
          <p class="text-center my-0">
            <i class="fab fa-creative-commons fa-lg"></i> CreativeCommons 2018 {{ config('app.name', 'eShared') }}. <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Llicència Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/80x15.png" /></a>
            | <a class="text-white" href="{{ url('legal') }}"><i class="fas fa-gavel fa-lg"></i> Avís legal</a>
            | <i class="fas fa-envelope fa-lg"></i><a class="text-white" href="mailto:email@example.com"> Contactar</a>
            <br>
            <button type="button" class="btn btn-link text-white" data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-info-circle fa-lg"></i> Més nformació sobre el lloc web
            </button>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Informació Webs al punt .cat -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Webs al punt .cat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Tancar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <p class="text-justify">L’objectiu del concurs Webs al punt .cat (en endavant WAP.cat) és el de promoure el coneixement de competències digitals en la comunitat escolar  a través de la creació de llocs web i apps. WAP.cat està destinat a alumnes de Primària, ESO, Batxillerat i Graus Formatius. El concurs també vol estimular la creació de continguts digitals en català.</p>
              </div>
            </div><!-- /.row -->
            <hr>
            <div class="row align-items-center">
              <h6>Logotips dels col·laboradors i del concurs</h6>
              <div class="col-md-6">
                <a href="https://ca.dinahosting.com" target="_blank">
                  <img src="{{ asset('img/dinahosting.jpg') }}" class="img-fluid" alt="Dinahosting">
                </a>
              </div>
              <div class="col-md-6">
                <a href="http://websalpunt.cat" target="_blank">
                  <img src="{{ asset('img/puntcat.png') }}" class="img-fluid" alt="WAP.cat">
                </a>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">D'acord</button>
        </div>
      </div><!-- /.modal-content -->
    </div>
  </div><!-- /.modal -->
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/bsadmin.js') }}"></script>
</body>
</html>
