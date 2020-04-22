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
                                <td> <a class="btn btn-primary" href="{{route('infoEvent', $event)}}" role="button">Info</a></td>
                                <td> <a class="btn btn-info btn-primary" href="{{route('selectEvent', $event)}}" role="button">Ajouter</a></td>
                            </tr>
                        @endforeach                    
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-6 info" style="display:none">
            @foreach ($event->users as $user)

            <tr>
                <th>{!! $event->id_Activite!!}</th>
                <th>{!! $event->Theme!!}</th>
                <td>{!! $user->id!!}</td>
                <td class="text-primary"><strong>{!! $user->name!!}</strong></td>
                <td> <a class="btn btn-primary" href="{{route('removeUserFromEvent', $user)}}" role="button">Retirer</a></td>
            </tr>

            @endforeach 

        </div>
    </div>
@endsection