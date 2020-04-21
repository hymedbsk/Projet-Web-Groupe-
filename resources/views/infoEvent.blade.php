@extends('layouts.app')

@section('content')
    <br>
    <div class="row">
        <div class="col-6">
            @if(session()->has('ok'))
                <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
            @endif
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Informations relatives à l'évènements</h3>
                </div>
                <p> Theme : {!!  $event->Theme !!}</p>
                <p> Organisateur : {!! $event->Organisateur !!}</p>
                <p> Local : {!! $event->Local !!}</p>
                <p> Date : {!! $event->Date !!}</p>
            </div>
            <div>
                <h4 class="panel-title">{!! $event->Theme!!}</h4>
                        <table class="table">
                            <thead>
                                <th>ID Etudiant</th>
                                <th>Nom</th>
                            </thead>

                        @foreach ($users as $user)

                            <tr>
                                <th>{!! $user->id!!}</th>
                                <th>{!! $user->name!!}</th>
                               
                            </tr>
                        
                        @endforeach 
                        </table>
            </div>
        </div>
    </div>
@endsection