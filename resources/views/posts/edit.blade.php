@extends('layouts/app')

@section('content')
<section class="masthead">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="justify-content-center"> Modifier votre annonce </h2>
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">

                {!! Form::model($posts,['route' => ['post.update', $posts->Post_id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                <div class="form-group  {!! $errors->has('Titre') ? 'has-error' : '' !!}">
                        {{ Form::label('Titre', 'Titre')}}
                        <div class="col-md-12">

                        {!! Form::text('Titre', $posts->Titre, ['class' => 'form-control ']) !!}
                        {!! $errors->first('Titre', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>

                {{ Form::label('Description', 'Description')}}
                <div class="col-md-12">

                        {!! Form::textarea ('Description', $posts->Description, ['class' => 'form-control ', 'placeholder' => 'Description (Une description claire et précise sur ce que tu proposes ou demandes) ']) !!}
                        {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
                        <p class="help-block text-danger"></p>
                    </div>


              {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}
                    {!! Form::close() !!}


<a href="javascript:history.back()" class="btn btn-warning">
 Retour</a>
</div>
</div>
</div>
</div>

</div>
</div>

</section>
