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
                                                <td class="text-primary"><strong>{!! $event->nom !!}</strong></td>
                                                <td class="text-primary"><strong>{!! $event->Organisateur !!}</strong></td>
                                                <td class="text-primary"><strong>{!! $event->Date !!}</strong></td>
                                                <td class="text-primary"><strong>{!! $event->Local !!}</strong></td>
                                                <td> <a class="btn btn-primary" href="{{route('infoEvent', $event->id_Activite)}}" role="button">Info</a></td>
                                                <td> <a class="btn btn-info btn-primary" href="{{route('manageEvent', $event->id_Activite)}}" role="button">Gérer les participants</a></td>
                                            </tr>
                                        @endforeach                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</header>
@endsection