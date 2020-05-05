@extends('layouts.app')

@section('content')
<section class="masthead">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="justify-content-center"> Ajouter une annonce </h2>
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-header">
                        @if(Auth::user()->type == "PR") 
			   <p>
                                En tant qu'étudiant prestataire tu peux créer une annonce pour partager ton savoir avec des étudiants entrepreneurs.
                            </p>
			@endif

			@if(Auth::user()->type == "EN")
                            <p>
                                En tant qu'étudiant entrepreneur tu peux créer une annonce pour demander de l'aide dans un domaine que tu ne connais pas.
                            </p>
			 @endif
                        </div>
                         <div class="card-body">
                            {!! Form::open(['route' => 'post.store','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group ">
                                    <div class="col-md-12">
                                        <div class="form-group  {!! $errors->has('Titre') ? 'has-error' : '' !!}">
                                        {!! Form::text('Titre', null, ['class' => 'form-control ', 'placeholder' => 'Titre (ex: Propose ou demande de l\'aide en Marketing Digital)']) !!}
                                        {!! $errors->first('Titre', '<small class="help-block">:message</small>') !!}
                                        </div>
                                    </div>
                            </div>

                            <div class="form-group  ">
                                <div class="col-md-12">
                                    <div class="form-group  {!! $errors->has('Description') ? 'has-error' : '' !!}">
                                        {!! Form::textarea ('Description', null, ['class' => 'form-control ', 'placeholder' => 'Description (Une description claire et précise sur ce que tu proposes ou demandes) ']) !!}
                                        {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                {!! Form::submit('Envoyer !', ['class' => 'btn pull-right']) !!}
                                {!! Form::close() !!}
                            </div>
                            </div>
                        </div>
        <!--<a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a> -->
    </div>
</div>

</section>
@endsection
