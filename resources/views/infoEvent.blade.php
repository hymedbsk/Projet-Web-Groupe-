@extends('layouts.app')

@section('content')
<header class="masthead">
    <div class="intro-text">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    @if(session()->has('ok'))
                        <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
                    @endif
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Informations relatives à l'évènements</h3>
                        </div>
                        <p> Theme : {!!  $event->nom !!}</p>
                        <p> Organisateur : {!! $event->Organisateur !!}</p>
                        <p> Local : {!! $event->Local !!}</p>
                        <p> Date : {!! $event->Date !!}</p>
                    </div>
                    <div>
                        <h4 class="panel-title">{!! $event->nom!!}</h4>
                            <table class="table">
                                <thead>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                </thead>

                            @foreach ($users as $user)

                                <tr>
                                    <th>{!! $user->matricule!!}</th>
                                    <th>{!! $user->nom!!}</th>
                                </tr>
                            @endforeach 
                            </table>
                    </div>
                    <a href="{{ route('listEvent') }}"  role="button" class=" btn btn-warning float-left">Retour</a>
                </div>
            </div>
        </div>
     </div>
</header>
@endsection