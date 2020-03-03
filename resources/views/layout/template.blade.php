<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ephec Entreprendre</title>

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <link href="{{ asset('css/agency.css') }}" rel="stylesheet">

</head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="#page-top">Ephec Entreprendre</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Accueil</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#propos">A propos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#structures">Structure</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Plate-forme</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/contact') }}">Contact</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">S'inscire</a>
                        </li>

                                    @if(Auth::check())

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('home') }}">Mon compte</a>
                                    </li>

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
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
                                </li>
                                @endif

                    </ul>
              </div>
            </div>
          </nav>

          @yield('content')

          <footer class="footer">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <span class="copyright">Copyright &copy; Ephec entreprendre 2019-2020</span>
                </div>
                <div class="col-md-4">
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                      <a href="#">Politique de confidentialité</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">Condition d'utilisation</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

        </footer>
        <script src="{{ asset('/js/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/js/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('/js/agency.min.js') }}"></script>

    </body>
</html>
