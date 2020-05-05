@extends('layouts.app')

@section('content')


<header class="masthead">
    <div class="container-fluid">
      <div class="intro-text">
    <br>
    <div class="col-md-12">
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif


        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des utilisateurs</h3>
            </div>
		<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
	</script>
	  <input class="form-control" id="myInput" type="text" placeholder="Search..">
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
                            {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                            <td>{!! $user->id !!}</td>
                            <td class="text-primary"><strong>{!! $user->nom !!}</strong></td>
                            <td class="text-primary"><strong>{!! $user->email !!}</strong></td>
                            <td class="text-primary"><strong>{!! $user->accountChecked !!}</strong></td>
                          
			    <td class="text-primary"><strong>
                            <label>
                               Vérifier {!! Form::checkbox('accountChecked', 1, null) !!}
                        </label>
                    </strong></td>
                    <td class="text-primary">    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                        {!! Form::close() !!}</td>
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
</header>
@endsection
