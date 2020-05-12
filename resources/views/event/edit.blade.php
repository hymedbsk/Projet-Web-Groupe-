@extends('layouts/app')

@section('content')
<section class="masthead">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-header">
                        <h2 class="justify-content-center"> Modifier l'évènement </h2>
                    </div>
                    <div class="card-body">
             {!! Form::model($events,['route' => ['event.update', $events->id_Activite], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}

             {{ Form::label('Nom', 'Nom')}}
                <div class="form-group  {!! $errors->has('Titre') ? 'has-error' : '' !!}">
                        <div class="col-md-12">

                        {!! Form::text('nom', $events->nom, ['class' => 'form-control ']) !!}
                        {!! $errors->first('Titre', '<small class="help-block">:message</small>') !!}
                        </div>
                </div>
                {{ Form::label('Orga', 'Organisateur')}}

                <div class="form-group ">
                    <div class="col-md-5">
                         <select name='orga' class=" form-control border-primary">
                             @foreach ($users as $user)
                                     <option value="{{$user->prenom}} {{ $user->nom}}">{{$user->prenom}}  {{ $user->nom}}</option>
                             @endforeach
                             <option value="externe">Organisateur externe</option>
                         </select>
                     </div>
            </div>
            {{ Form::label('date', 'Date')}}
                <div class="form-group ">
                    <div class="col-md-5">
                        <input
                        name="date"
                        id="date"
                        class="form-control"
                        style="width: 100%; display: inline;"
                        onchange="invoicedue(event);"
                        required=""
                        value = "{{$events->Date}}"
                        type="date">
                    </div>
                </div>










                {{ Form::label('local', 'Local')}}
                        {!! Form::text ('local', $events->Local, ['class' => 'form-control ']) !!}
                        {!! $errors->first('local', '<small class="help-block">:message</small>') !!}
                        <p class="help-block text-danger"></p>
                </div>


              {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}
                    {!! Form::close() !!}



                </div>
                <a href="javascript:history.back()" class="btn btn-warning">
                    Retour</a>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection
