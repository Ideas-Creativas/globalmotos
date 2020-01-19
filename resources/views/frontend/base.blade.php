<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Global Motos') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Motos</a></li>
          <li><a href="#">Post Venta</a></li>
          <li><a href="#">Contacto</a></li>
          <li><a href="#"><img src={{ asset('images/static/instagram-sup.png') }} alt="Seguinos por Instagram"/></a></li>
          <li><a href="#"><img src={{ asset('images/static/facebook-sup.png') }} alt="Seguinos por Facebook"/></a></li>
        </ul>
      </nav>
    </header>
    <main class="py-4">
      @yield('content')
    </main>
  </body>
</html>
