@extends('layouts/app')

@section('content')
<section class="page-section" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
			<div class="panel-heading"> <h3 class="panel-title">Modification d'un utilisateur</h3></div>
			<div class="panel-body">

{{ var_dump($user)}}
					{!! Form::model($user, ['route' => ['user.update', $user->User_id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
					  	{!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
					  	{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                        {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Prenom']) !!}
                        {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                  </div>
					<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
					  	{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
					  	{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label>

							</label>
						</div>
					</div>
						{!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
    </div>
</div>
</div>


</section>
@endsection
