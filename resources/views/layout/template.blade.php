<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ephec Entreprendre</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <link href="{{ asset('css/agency.css') }}" rel="stylesheet">

</head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="{{ url("/")}}">Ephec Entreprendre</a>
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
                </ul>
                        @if(Auth::check() and Auth()->user()->accountChecked == 1)
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase nav-item"   href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->prenom }} <span class="caret"></span>
                        </a>

                            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">

                                    <a class=" dropdown-item nav-item " href="{{ url('/profil') }}" >
                                         <p>  Mon profil </p>
                                     </a>

                                     <a class=" dropdown-item nav-item " href="{{ url('/post/create') }}" >
                                        <p>  Ajouter une annonce  </p>
                                    </a>

                                @if(Auth()->user()->admin == 1)

                                    <a class=" dropdown-item nav-item " href="{{ url('/user') }}" >
                                         <p>Vérifications des étudiants   </p>
                                     </a>

                                @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                @endif


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
