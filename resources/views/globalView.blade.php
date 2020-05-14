@extends('layouts.app')

@section('content')
<header class="masthead">
    <div class="intro-text">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
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
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>email</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($users as $user)
                            @if ($user->accountChecked==1)
                            <tr>
                                <td>{!! $user->matricule!!}</td>
                                <td class="text-primary"><strong>{!! $user->nom !!}</strong></td>
                                <td class="text-primary"><strong>{!! $user->email !!}</strong></td>
                            </tr>
                            @endif
                        @endforeach                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<header class="masthead">
    <div class="intro-text">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Liste des participants</h3>
                        </div>
                        
                        <tbody>
                            @foreach ($events as $event)
                                <br>
                                <h4 class="panel-title">{!! $event->nom!!}</h4>
                                <table class="table">
                                    <thead>
                                        <th>Matricule</th>
                                        <th>Email</th>
                                        <th>Nom</th>
                                    </thead>

                                @foreach ($event->users as $user)

                                    <tr>
                                        <td>{!! $user->matricule!!}</td>
                                        <td class="text-primary"><strong>{!! $user->email !!}</strong></td>
                                        <td class="text-primary"><strong>{!! $user->nom!!}</strong></td>
                                    </tr>
                                
                                @endforeach 
                                </table>
                            @endforeach                     
                        </tbody>
                    </div>
                </div>
            </div>
        </div>
     </div>
</header>
@endsection