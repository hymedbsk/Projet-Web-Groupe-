@extends('layouts.app')
@section('content')
  <section class="page-section" id="services">
        <div class="container">
                @include('message')

                <div class="row">
                    @foreach($events as $event)
                        <div class="col-md-6 ">
                            <div class="card shadow p-3 mb-5 bg-white rounded">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $event->nom }}</h5>
                                    <p class="card-text"> Dirigé par {{ $event->Organisateur }}</p>
                                    <p class="sub-card">  le {!! $event->Date->format('d-m-Y') !!} au local {{ $event->local }}</p>
                                    @if(Auth::user()->prof == 1)
                                    <a href="{{ url('/event/'.$event->id_Activite. '/edit')}}" class="btn btn-warning float-left"> Modifier </a>
                                    {{ Form::open(['action' => ['EventController@destroy', $event->id_Activite], 'method' => 'POST'])}}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Supprimer', ['class' => 'btn btn-danger float-right', 'onclick' => 'return confirm(\'Vraiment supprimer cette annonce ?\')'] )}}
                                    {{Form::close()}}
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
  </section>
@endsection
