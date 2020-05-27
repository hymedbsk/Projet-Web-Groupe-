@extends('layouts.log')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Nos missions</h2>
              <h3 class="section-subheading text-muted"></h3>
            </div>
          </div>
        <div class="row">

          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="{{ asset('/img/téléchargement.png') }}" alt="logo che2">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">

                    <h4 class="subheading">Représenter les étudiants</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Le Conseil étudiant représente l'ensemble des étudiants et porte leur voix dans les différents organes décisionnels de l'établissement. Au même titre que le corps professoral, les étudiants constituent donc un acteur essentiel dans chaque établissement. Ils ont leur mot à dire au sein de l'école et c'est par la voix des représentants des étudiants que cela doit passer.</div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">

                    <img class="rounded-circle img-fluid" src="{{ asset('/img/téléchargement.png') }}" alt="logo che2">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Défendre et promouvoir les intérêts des étudiants</h4>
                    <h4 class="subheading"></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Le rôle d'un représentant étudiant est de relayer les problématiques qui concernent les étudiants dans les instances adéquates: mauvais état des bâtiments, coût trop élevé du matériel scolaire, manque de place dans les locaux ou bibliothèques, inexistence de cantine proposant des prix démocratiques, abus de la part d'un directeur ou d'un enseignant, discrimination, ...

                    </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="{{ asset('/img/téléchargement.png') }}" alt="logo che2">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Informer les étudiants</h4>
                    <h4 class="subheading"> </h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"> Cette mission se concrétise à deux niveaux différents: en premier lieu, il est important de communiquer et d'informer les étudiants par rapport à ce qu'il se passe dans l'établissement et dans le Conseil étudiant. En second lieu, il faut également informer et sensibiliser les étudiants quant à leurs droits et à la manière de les défendre (au sein de l'établissement ou au niveau communautaire). La FEF propose plusieurs outils (publications, campagnes, ...) pour aider les Conseil étudiants dans cette tâche et stimuler les initiatives.
                   </div>
                </div>
              </li>
      </div>
    </div>
  </section>

@endsection
