@extends('layouts.app')

@section('content')





  <section class="page-section" id="services">
    <div class="container">
        {!! $links !!}
      <div class="row">

        @foreach($posts as $post)
        <div class="col-md-6 ">
            <div class="card shadow p-3 mb-5 bg-white rounded">

            <div class="card-body">

              <h5 class="card-title">{{ $post->Titre }}</h5>
              <p class="card-text">{{ $post->Description }}</p>
              <p class="sub-card"> {{ $post->user->prenom }} le {!! $post->Date->format('d-m-Y') !!} </p>
            </div>
          </div>

    </div>
      @endforeach
      </div>

    </div>
  </section>

@endsection
