<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'eShared') }}</title>

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
@if (Request::path()=='home')
<body onload="onload();"class="bg-secondary">
@elseif (Request::path()=='/')
<body class="bg-secondary" onload="checkCookie();">
@else
<body class="bg-secondary">
@endif

    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bsadmin.js') }}"></script>
</body>
</html>
