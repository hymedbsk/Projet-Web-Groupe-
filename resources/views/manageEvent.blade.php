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
                        <h2>{!!$event->nom!!}</h2>
                        <div class="panel-heading">
                            <h3 class="panel-title">Liste des participants à {!!$event->nom!!}</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Nom</th>
                                        <th>email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="text-primary"><strong>{!! $user->matricule !!}</td>
                                        <td class="text-primary"><strong>{!! $user->nom !!}</strong></td>
                                        <td class="text-primary"><strong>{!! $user->email !!}</strong></td>
                                        <td> <a href="{{ route('removeUserFromEvent', ['user'=>$user, 'event'=>$event]) }}"  role="button" class=" btn btn-warning float-left"> Supprimer</td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Liste des étudiants </h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($final as $nonUser)
                                <tr>
                                
                                    <td class="text-primary"><strong>{!! $nonUser->matricule !!}</td>
                                    <td class="text-primary"><strong>{!! $nonUser->nom !!}</strong></td>
                                    <td class="text-primary"><strong>{!! $nonUser->email !!}</strong></td>
                                
                                    <td><a href="{{ route('addUserToEvent',['user'=>$nonUser, 'event'=>$event])}}" class="btn btn-warning float-left"> Ajouter</td>       
                                
                                </tr>
                                @endforeach                    
                            </tbody>
                        </table>
                        <a href="{{ route('listEvent') }}"  role="button" class=" btn btn-warning float-left">Retour</a>
                    </div>
                </div>
            </div>
         </div>
     </div>
</header>

@endsection