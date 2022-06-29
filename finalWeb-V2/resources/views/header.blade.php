<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Buena Fortuna
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('contenido2')
        </main>

<div  style="background-color: #BB8FCE">

<footer class="text-white text-center text-lg-start "  >

<div class="container p-4" style="background-color: #BB8FCE">
  
  <div class="row mt-4">

    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
      <h5 class="text-uppercase mb-4">Buena fortuna</h5>

      <p>
        En nuestro super mercado encontraras todos los productos que necesitas para tu hogar a precios insuperables.
      </p>

    </div>
    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
      <h5 class="text-uppercase mb-4 pb-1">Contactanos</h5>

      <ul class="fa-ul" style="margin-left: 1.65em;">
        <li class="mb-3">
          <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Manizales, Caldas, COL</span>
        </li>
        <li class="mb-3">
          <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">buenafortuna@gmail.com</span>
        </li>
        <li class="mb-3">
          <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">304-386-1307</span>
        </li>
        <li class="mb-3">
          <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">321-953-7671</span>
        </li>
      </ul>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 mb-md-0" >
      <h5 class="text-uppercase mb-4">Horarios atención</h5>

      <table class="table text-center text-white">
        <tbody class="font-weight-normal">
          <tr>
            <td>Lun - Sab:</td>
            <td>7:30am - 8pm</td>
          </tr>
          <tr>
            <td>Dom - Fes:</td>
            <td>8am - 7Pm</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> 
</div>
</footer>
</div>
</body>
</html>
