@extends('layouts.app')

@section('content')
<header class="masthead" >
   <div class="intro-text"> 	
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
             <div class="card">
                <div class="card-header">
			<h3 class="panel-title">Modification d'un utilisateur</h3>
                   </div>
                <div class="card-body">
			{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
			
			 <div class="form-group {!! $errors->has('matricule') ? 'has-error' : '' !!}">
                       		 <label for="Matricule" class="col-md-4 col-form-label text-md-center ">Matricule</label>
				{!! Form::text('matricule', null, ['class' => 'form-control', 'placeholder' => 'Matricule']) !!}
                                {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                	 </div>
			

			<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
				<label for="nom" class="col-md-4 col-form-label text-md-center ">Nom</label>
				{!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
				{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
               
		 	</div>
                	 <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
				<label for="prenom" class="col-md-4 col-form-label text-md-center ">Prénom</label>
                        	{!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Prenom']) !!}
                        	{!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                 	 </div>
		 	<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
		        	<label for="email" class="col-md-4 col-form-label text-md-center ">Email</label>
				{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
				{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
			</div>
		   	
                               
                        
			<br>
		    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
		{!! Form::close()!!}



                <a href="javascript:history.back()" class="btn btn-info">
                    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                </a>
                </div>
            </div>
        </div>
     </div>
   </div>
</header>
@endsection
