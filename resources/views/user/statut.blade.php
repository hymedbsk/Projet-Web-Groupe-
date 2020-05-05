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
                    <h3 class="panel-title">Gestion des statuts</h3>
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
                            <th>Pr      nom</th>
                            
                            <th> Statut</th>

                            <th></th>

                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
			@if($user->prof==0)
                            <tr id="myList">
                                <td class="text-primary">{!! $user->matricule !!}</td>
                                <td class="text-primary" id="myInput" ><strong>{!! $user->nom !!}</strong></td>
                                <td class="text-primary"><strong>{!! $user->prenom !!}</strong></td>
                                

                                @if($user->type=="PR")
                                <td class="text-primary"><strong>Pr      stataire</strong></td>
                                @endif
                                @if($user->type=="EN")
                                <td class="text-primary"><strong>Entrepreneur</strong></td>
                               @endif
				@if($user->type=="EN")
				<td>
                                    <div class="form-group text-center ">
                                      {!! Form::open([ 'method'=>'put', 'route' => ['statut.update', $user->id]]) !!}
                                      {!! Form::submit('Passer       tudiant pr      stataire', ['class' => 'btn btn-success btn-block', 'onclick' => 'return confirm(\'Vraiment le passer       tudiant pr      stataire ?\')']) !!}
                                      {!! Form::close() !!}
                                    </div>
				</td>
                            @endif
                            @if($user->type=="PR")
				<td>
                                <div class="form-group text-center ">
                                      {!! Form::open([ 'method'=>'put', 'route' => ['statut.update', $user->id]]) !!}
                                      {!! Form::submit('Passer       tudiant entrepreneur', ['class' => 'btn btn-warning btn-block', 'onclick' => 'return confirm(\'Vraiment le passer       tudiant entrepreneur ?\')']) !!}
                                      {!! Form::close() !!}

                            </div>
					</td>
                        @endif                        
                            </tr>
			@endif
                        @endforeach
			
                      </tbody>

                </table>
            
            </div>

                <br>
         {!! $links !!}
        </div>
        </div>
    </div>

</section>

@endsection
