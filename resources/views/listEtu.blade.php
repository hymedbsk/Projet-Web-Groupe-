@extends('layouts.app')

@section('content')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des utilisateurs</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>email</th>
                        <th>accountChecked</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($users as $user)
                        @if ($user->accountChecked==1)
                        <tr>
                            <td>{!! $user->id !!}</td>
                            <td class="text-primary"><strong>{!! $user->name !!}</strong></td>
                            <td class="text-primary"><strong>{!! $user->email !!}</strong></td>
                            <td class="text-primary"><strong>{!! $user->accountChecked !!}</strong></td>
                            <td> <a class="btn btn-primary" href="{{route('addUserToEvent', $user)}}" role="button">Ajouter</a></td>
                        </tr>
                        @endif
                    @endforeach                    
                  </tbody>
            </table>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des participants</h3>
            </div>
            
                <tbody>
                    @foreach ($events as $event)

                        <h3 class="panel-title">{!! $event->Theme!!}</h3>
                        <table class="table">
                            <thead>
                                <th>ID event</th>
                                <th>{!! $event->Theme!!}</th>
                                <th>ID Etudiant</th>
                                <th>Nom</th>
                            </thead>

                        @foreach ($event->users as $user)

                            <tr>
                                <th>{!! $event->id_Activite!!}</th>
                                <th>{!! $event->Theme!!}</th>
                                <td>{!! $user->id!!}</td>
                                <td class="text-primary"><strong>{!! $user->name!!}</strong></td>
                            </tr>
                        
                        @endforeach 
                        </table>
                    @endforeach                     
                </tbody>
        </div>
    </div>
@endsection