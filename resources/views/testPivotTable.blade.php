@extends('layouts.app')

@section('content')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des participants</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Thème</th>
                        <th>ID étudiant</th>
                        <th>Nom</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($events as $event) 
                        @foreach ($event->users as $user)
                            <tr>
                                <td>{!! $event->Theme!!}</td>
                                <td>{!! $user->id!!}</td>
                                <td class="text-primary"><strong>{!! $user->name!!}</strong></td>
                                <td> <a class="btn btn-primary" href="{{route('addUserToEvent', $user)}}" role="button">Ajouter</a></td>
                            </tr>
                        @endforeach 
                    @endforeach              
                </tbody>
            </table>
        </div>
    </div>
@endsection