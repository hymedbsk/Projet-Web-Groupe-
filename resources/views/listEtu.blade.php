@extends('layouts.app')

@section('content')
<header class="masthead">
    <div class="intro-text">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
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
                                    @if ($user->accountChecked==0)
                                    <tr>
                                        <td>{!! $user->User_id !!}</td>
                                        <td class="text-primary"><strong>{!! $user->nom!!}</strong></td>
                                        <td class="text-primary"><strong>{!! $user->email !!}</strong></td>
                                        <td class="text-primary"><strong>{!! $user->accountChecked !!}</strong></td>
                                        <td> <a class="btn btn-primary btn-success" href="{{route('valUser', $user)}}" role="button">Valider</a></td>
                                        <td> <a class="btn btn-primary btn-danger" href="{{route('delUser', $user)}}" role="button">Supprimer</a></td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     </div>
</header>
@endsection