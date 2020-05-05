<!DOCTYPE html>
<html lang="fr">

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ephec Entreprendre</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                        <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Plate-forme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
                        </li>
                    </ul>
                    @endguest

                </div>
                        @if(Auth::check())
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase nav-item"   href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

            <header class="masthead">
                <div class="container">
                <div class="intro-text">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body" >
                        <blockquote class="blockquote mb-0 font-italic">
                            <p> " L'esprit d'entreprendre fait partie de l'ADN de l'EPHEC. Vous êtes tous concernés ! En insufflant à tous nos étudiants tout au long de leurs études cet esprit d'entreprendre fait de persévérance, de créativité, d'optimisme, d'esprit d'équipe et d'autonomie, nous les incitons à se mettre en projet, ce qui favorise leur future employabilité. "</p>
                        </blockquote>
                        </div>
                    </div>
                </div>
            </header>

                <!-- Partenaires -->
    <section class="page-section" id="propos">
        <div class="container">

            <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                <li>
                    <div class="timeline-image">
                    </div>
                    <div class="timeline-panel">
                    <div class="timeline-heading">

                        <h4 class="subheading">EPHEC ENTREPRENDRE, c'est quoi ?</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Ce sont deux structures organisées localement (une à Louvain-la-Neuve et une à Bruxelles). Cet ancrage local permet de collaborer plus aisément avec les acteurs locaux. Ces cellules, qui bénéficient de subsides régionaux, ont pour objectif d'accompagner, de mettre en lumière et en réseau les étudiants et les anciens à profil entrepreneur.</div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                    </div>
                    <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Le statut d'étudiant entrepreneur ?</h4>
                        <h4 class="subheading"></h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Faisant suite à la nouvelle loi fixant le statut social et fiscal de l'étudiant entrepreneur, la Haute Ecole EPHEC a développé le statut​ académique d'étudiant entrepreneur afin de soutenir les jeunes qui veulent se lancer dans le monde de l'entrepreneuriat en parallèle de leur parcours étudiant.

                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image">
                    </div>
                    <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Le statut d'étudiant entrepreneur</h4>
                        <h4 class="subheading"> Pour qui ?</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Tout étudiant régulièrement inscrit à la Haute Ecole peut introduire sa demande. Ce statut d’« Etudiant Entrepreneur » sera accordé pour autant que l’étudiant concerné soit dans un projet de création d’entreprise au stade de l’idée ou alors dans un projet de création d’entreprise au stade de développement ou Il est déjà fondateur ou dirigeant d’une entreprise existante au stade de démarrage ou de déploiement.
                    </div>
                    </div>
                </li>
        </div>
        </div>
    </section>


    <!-- Portfolio Grid -->
    <section class="bg-light page-section" id="structures">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Deux structures</h2>
            <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#modalBXL">
                <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                </div>
                </div>
                <img class="img-fluid" src="img/bxl.jpg" alt="Ephec entreprendre bxl">
            </a>
            <div class="portfolio-caption">
                <h4></h4>
                <p class="text-muted"></p>
            </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">

            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#modalLLN">
                <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                </div>
                </div>
                <img class="img-fluid" src="img/lln.jpg" alt="Ephec entreprendre lln">
            </a>
            <div class="portfolio-caption">
                <h4></h4>
                <p class="text-muted"></p>
            </div>
            </div>

        </div>
    </section>


    <div class="portfolio-modal modal fade" id="modalBXL" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                <div class="modal-body">

                    <h2 class="text-uppercase">Ephec Entreprendre Bruxelles</h2>


                    <ul>
                        <li>Elle est subsidiée par la <a href="http://be.brussels/" target="_blank">Région Bruxelles-Capitale</a> sur base d'un appel à projets auquel nous avons répondu&nbsp;dans le cadre de la stratégie <a href="https://yet.brussels/" target="_blank">YET</a></li>
                        <li>Elle travaille en partenariat avec <a href="http://jyb.be/" target="_blank">JobYourself</a>, et plus particulièrement avec l'une de ses coopératives d'activités : Bruxelles Emergences.</li>
                        <li>Pour faciliter l'accompagnement et le suivi des étudiants entrepreneurs, elle utilise le CRM <a href="https://www.wikipreneurs.com/" target="_blank">Wikipreneurs</a> (parcours à l'entrepreneuriat en 6 étapes).</li>
                        <li>EPHEC ENTREPRENDRE @Bruxelles a intégré le réseau <a href="https://www.1819.brussels/fr" target="_blank">1819</a>.</li>
                    </ul>
                    <p><strong>Que propose-t-elle ?</strong></p>
                    <p>Elle offre aux étudiants porteurs de projets issus des implantations de Woluwe (Haute Ecole EPHEC et Ecole EPHEC Promotion sociale) et de l'Isat un parcours d'accompagnement à la création d'entreprise :</p>
                    <ul>
                        <li>Coaching individuel et collectif</li>
                        <li>Accès au parcours TEST de Bruxelles Emergences</li>
                        <li>Accès à des espaces de coworking…</li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

        <div class="portfolio-modal modal fade" id="modalLLN" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
                </div>
                <div class="container">
                    <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">

                        <h2 class="text-uppercase">Ephec Entreprendre Louvain-la-Neuve</h2>

                        <p>Elle bénéficie du soutien de la Région Wallonne via la <a href="http://www.sowalfin.be/" target="_blank">SOWALFIN</a> dans le cadre de son projet Générations Entreprenantes.</p>
                        <p><strong>Que propose-t-elle ?</strong></p>
                        <ul>
                            <li>Un accompagnement en interne</li>
                            <li>Une orientation selon les cas vers des structures externes comme l'<a href="https://www.yncubator.be/" target="_blank">Yncubator</a>, structure d'aide à l'émergence et l'accompagnement des projets de création d'entreprises innovantes, implantée à Louvain-la-Neuve, partenaire de l'EPHEC</li>
                            <li>Des ateliers mensuels de sensibilisation à l'esprit d'entreprendre</li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <section class="bg-light page-section" id="structures">
            <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/carrousel/woaw.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carrousel/woaw.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carrousel/woaw.jpg') }}" class="d-block w-100" alt="...">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">précédent</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">suivant</span>
            </a>
        </div>
        </div>
        </section>
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
    </body>
</html>
