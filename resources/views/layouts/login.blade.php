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

  @yield('content')

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/bsadmin.js') }}"></script>
</body>
</html>
