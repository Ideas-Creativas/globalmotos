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
    <style type="text/css">
    @font-face {
        font-family: dinAlternate;
        src: url('{{ asset('fonts/dinAlternateBold.otf') }}');
    }
    </style>
  </head>
  <body>
    <header>
      <div class="header-container">
        <div class="logo">
          <img src="{{ asset('images/static/logo-principal.png') }}" alt="Global Motos">
        </div>
        <nav class="header-nav">
          <ul class="header-nav-botones">
            <li><a href="/">Home</a></li>
            <li><a href="/motos">Motos</a></li>
            <li><a href="/postventa">Post Venta</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="#"><img src={{ asset('images/static/instagram-sup.png') }} alt="Seguinos por Instagram"/></a></li>
            <li><a href="#"><img src={{ asset('images/static/facebook-sup.png') }} alt="Seguinos por Facebook"/></a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main class="cont">
      @yield('content')
    </main>
    <footer>
      <div class="footer-container">
        <div class="logo-inf">
          <img src="{{ asset('images/static/logo-inferior.png') }}" alt="">
        </div>
        <div class="nav-inf">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Motos</a></li>
            <li><a href="#">Post Venta</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
        <div class="domicilio-inf">
          <ul>
            <li>Contacto</li>
            <li>Chacabuco 1507 - Corrientes Capital</li>
            <li>03783 42147</li>
          </ul>
        </div>
        <div class="redes-inf">
          <ul>
            <li>
              <img src="{{ asset('images/static/instagram-inf.png') }}" alt="Seguinos en Instagram">
            </li>
            <li>
              <img src="{{ asset('images/static/facebook-inf.png') }}" alt="Seguinos en Twitter">
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
