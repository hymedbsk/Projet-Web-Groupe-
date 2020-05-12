@extends('layouts.app')

@section('content')
<section class="masthead">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-header">
                            <h2 class="justify-content-center">Créer une annonnce </h2>
                        </div>
                         <div class="card-body">
                            {!! Form::open(['route' => 'event.store', 'method'=>'post']) !!}
                            <div class="form-group ">
                                    <div class="col-md-12">
                                        <div class="form-group  {!! $errors->has('nom') ? 'has-error' : '' !!}">
                                        {!! Form::text('nom', null, ['class' => 'form-control ', 'placeholder' => 'Nom de l\'évènement']) !!}
                                        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                                        </div>
                                    </div>
                            </div>
                     <div class="form-group ">
                                   <div class="col-md-6">
                                        <select name='orga' class=" form-control border-primary">
                                            @foreach ($users as $user)
                                                    <option value="{{$user->prenom}} {{ $user->nom}}">{{$user->prenom}}  {{ $user->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                           </div>

                            <div class="form-group ">
                                    <div class="col-md-6">
                                        <input
                                        name="date"
                                        id="date"
                                        class="form-control"
                                        style="width: 100%; display: inline;"
                                        onchange="invoicedue(event);"
                                        required=""
                                        type="date">
                                    </div>
                            </div>
                        </div>

                            <div class="form-group ">
                                <div class="col-md-12">
                                    <div class="form-group  {!! $errors->has('local') ? 'has-error' : '' !!}">
                                    {!! Form::text('local', null, ['class' => 'form-control ', 'placeholder' => 'Local']) !!}
                                    {!! $errors->first('local', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-7 ">
                                {!! Form::submit('Envoyer !', ['class' => 'btn pull-right']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <a href="javascript:history.back()" class="btn btn-primary">
                            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                        </a>
                    </div>
                    </div>

</div>

</section>
@endsection
