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
                    <h3 class="panel-title">Liste des évènements</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Theme</th>
                            <th>Professeur</th>
                            <th>Date</th>
                            <th>Local</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($events as $event)
                            <tr>
                                <td>{!! $event->id_Activite !!}</td>
                                <td class="text-primary"><strong>{!! $event->Theme !!}</strong></td>
                                <td class="text-primary"><strong>{!! $event->Organisateur !!}</strong></td>
                                <td class="text-primary"><strong>{!! $event->Date !!}</strong></td>
                                <td class="text-primary"><strong>{!! $event->Local !!}</strong></td>
                                <td> <a class="btn btn-primary" href="{{route('selectEvent', $event)}}" role="button">Sélectionner</a></td>
                            </tr>
                        @endforeach                    
                    </tbody>
                </table>
            </div>
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
        </div>
    </div>
    <div class="row">
        <div class=" col-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Liste des participants</h3>
                </div>
                
                <tbody>
                    @foreach ($events as $event)
                        <br>
                        <h4 class="panel-title">{!! $event->Theme!!}</h4>
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
                                <td> <a class="btn btn-primary" href="{{route('removeUserFromEvent', $user)}}" role="button">Retirer</a></td>
                            </tr>
                        
                        @endforeach 
                        </table>
                    @endforeach                     
                </tbody>
            </div>
        </div>
    </div>
@endsection