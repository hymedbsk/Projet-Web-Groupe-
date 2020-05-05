
@extends('layouts.app')
@section('content')
<header class="masthead">
  <div class="intro-text">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                 <div class="card-header">
                     <h3 class="panel-title">Gestion des profésseurs/h3>
                     <p>
                     
                        @include('message')
                    </p>
                                                                                                                                                                                                                                                               </div>
                  <div class="card-body">
                      <table class="table">
                         <thead>
                              <th class="scope">Matricule</th>
                              <th class="scope">Email</th>
                                <th class="scope">Nom</th>
				 <th class="scope">Prénom</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                 <tr>
                                    <td class="text-primary"><strong>{!! $user->matricule !!}</strong></td>
                                    <td class="text-primary"><strong>{!! $user->email !!}</strong></td>
					<td class="text-primary"><strong>{!! $user->nom !!}</strong></td>
					<td class="text-primary"><strong>{!! $user->prenom !!}</strong></td>  
                                    <td>
                                      @if($user->prof == 0)
                                      {!! Form::open([ 'method'=>'put', 'route' => ['admin.add', $user->id, 'method'=>'put']]) !!}
                                      {!! Form::submit('Passer en tant que prof', ['class' => 'btn btn-success btn-block', 'onclick' => 'return confirm(\'Vraiment le passer prof ?\')']) !!}
                                      {!! Form::close() !!}                                                                                                                                                                                                                                                                                                                                                                                                                               
                                        @endif
                                        @if($user->prof == 1)

                                      {!! Form::open([ 'method'=>'put', 'route' => ['admin.add', $user->id, 'method'=>'put']]) !!}
                                      {!! Form::submit('Retirer des profs', ['class' => 'btn btn-warning btn-block', 'onclick' => 'return confirm(\'Vraiment le retirer des profs ?\')']) !!}
                                      {!! Form::close() !!}
                                     </td>
                                        @endif
                                </tr>
                          @endforeach
                      </tbody>
                </table>
            </div>
            {!! $links !!}
        </div>
        </div>
    </div>
   </div>
  </div>
</header>

@endsection
