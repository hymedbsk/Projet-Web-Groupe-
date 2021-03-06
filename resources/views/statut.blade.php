@extends('layouts.app')

@section('content')

<section class="masthead" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <div class="card shadow-lg  bg-white rounded">
                    <div class="card-header">
                        <p>
                            <h2> Changer son statut </h2>
                        </p>

                        @if(Auth::user()->Type=="PR")
                            <p>
                               Tu peux changer ton statut d'étudiant préstataire en celui d'étudiant entrepreneur.
                            </p>
                        @endif
                        @if(Auth::user()->Type=="EN")
                            <p>
                                Tu peux changer ton statut d'étudiant entrepreneur en celui d'étudiant préstataire.
                            </p>
                            @endif
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'statut.contact']) !!}
                                <div class="col-md-6">
                                    <div class="form-group  {!! $errors->has('texte') ? 'has-error' : '' !!}">
                                        {!! Form::text('matricule', $user->matricule, ['class' => 'form-control', 'placeholder' => 'Votre matricule', "maxlength" => '8']) !!}
                                        {!! $errors->first('matricule', '<small class="help-block">:message</small>') !!}
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                                        {!! Form::text('nom', $user->nom, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
                                        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                                        {!! Form::text('prenom', $user->prenom, ['class' => 'form-control', 'placeholder' => 'Votre prénom']) !!}
                                        {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
                                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>





                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        {!! Form::submit('Envoyer !', ['class' => 'btn btn-primary btn-xl text-uppercase']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>

                    </div>
            </div>
        </div>
    </div>
  </section>

@endsection
