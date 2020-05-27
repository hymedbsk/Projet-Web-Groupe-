@extends('layouts.app')
@section('content')
  <section class="page-section" id="services">
        <div class="container">
                @include('message')
                {!! $links !!}
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-6 ">
                            <div class="card shadow p-3 mb-5 bg-white rounded">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->titre }}</h5>
                                    <p class="card-text">{{ $post->description }}</p>
                                    <p class="sub-card"> {{ $post->user->prenom }} le {!! $post->date->format('d-m-Y') !!} </p>
                                    @if(Auth::user()->id == $post->User_id)
                                    <a href="{{ url('/post/'.$post->Post_id. '/edit')}}" class="btn btn-warning float-left"> Modifier </a>
                                    {{ Form::open(['action' => ['PostController@destroy', $post->Post_id], 'method' => 'POST'])}}
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
