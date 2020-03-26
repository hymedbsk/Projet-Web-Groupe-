@extends('layouts.app')

@section('content')
<section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Nous contacter</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
        {!! Form::open(['url' => 'contact']) !!}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                 {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
            {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                 {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Votre prénom']) !!}
            {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                   {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group  {!! $errors->has('texte') ? 'has-error' : '' !!}">
                  {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
            {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
               {!! Form::submit('Envoyer !', ['class' => 'btn btn-primary btn-xl text-uppercase']) !!}
        {!! Form::close() !!}
              </div>
            </div>
          </form>
          <div class="alert alert-primary" role="alert">
            Aucunes des informations entrées ci-dessus ne sera sauvegardées.
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection


