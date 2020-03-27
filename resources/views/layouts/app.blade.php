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

  <link href="{{ asset('css/auth.css') }}" rel="stylesheet">

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
                @guest
                    <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#propos">A propos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#structures">Structure</a>
                  </li>
                  @endguest
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/post') }}">Plate-forme</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/contact') }}">Contact</a>
                  </li>

                </ul>
            </div>
        @if(Auth::check() and Auth()->user()->accountChecked == 1)
        <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase "   href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->prenom }} <span class="caret"></span>
        </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

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
</nav>


            @yield('content')

      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('/js/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

      <!-- Plugin JavaScript -->
      <script src="{{ asset('/js/jquery-easing/jquery.easing.min.js') }}"></script>



      <!-- Custom scripts for this template -->
      <script src="{{ asset('/js/agency.min.js') }}"></script>
</body>
</html>
