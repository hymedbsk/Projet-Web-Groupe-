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
                        <th>#</th>
                        <th>Nom</th>
                        <th>email</th>
                        <th>accountChecked</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($users as $user)
                        @if ($user->accountChecked==0)
                        <tr>
                            <td>{!! $user->id !!}</td>
                            <td class="text-primary"><strong>{!! $user->name !!}</strong></td>
                            <td class="text-primary"><strong>{!! $user->email !!}</strong></td>
                            <td class="text-primary"><strong>{!! $user->accountChecked !!}</strong></td>
                        </tr>
                        @endif
                    @endforeach                    
                  </tbody>
            </table>
        </div>
        {!! $links !!}
    </div>
@endsection