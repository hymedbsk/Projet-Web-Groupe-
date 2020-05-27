@extends('layouts/app')

@section('content')
<section class="page-section" id="services">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
            @if(session()->has('ok'))
                <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
            @endif
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Liste des utilisateurs</h3>
			@include('message')
                </div>
		<input class="form-control" id="myInput" type="text" placeholder="Search..">
		<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList ").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>E-mail</th>
                            <th> Statut</th>
			    
			    <th></th>
				
				<th> <a href="{{ url('admin') }}" class="btn btn-info"> Gérer  les profésseurs</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr id="myList">
                                <td class="text-primary">{!! $user->matricule !!}</td>
                                <td class="text-primary" id="myInput" ><strong>{!! $user->nom !!}</strong></td>
                                <td class="text-primary"><strong>{!! $user->prenom !!}</strong></td>
                                <td class="text-primary"><strong> {{$user->email}}</strong></td>
				
				@if($user->type=="PR")
                                <td class="text-primary"><strong>Préstataire</strong></td>
                                @endif
                                @if($user->type=="EN")
                                <td class="text-primary"><strong>Entrepreneur</strong></td>
                                @endif 
                                <td>{!! link_to_route('user.edit', 'Modifier', [$user->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                      
				
				 <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->User_id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                      </tbody>

                </table>
		{!! link_to_route('user.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info pull-right']) !!}
            </div>
            
        	<br>   
	 {!! $links !!}
        </div>
        </div>
    </div>

</section>

@endsection
