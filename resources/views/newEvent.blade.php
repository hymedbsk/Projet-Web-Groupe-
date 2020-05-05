@extends('layouts.app')

@section('content')
    <br>
    <div class="row">
        <div class="col-6">
            @if(session()->has('ok'))
                <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
            @endif
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Créer un évenement</h3>
                </div>
                <form method="POST" action="{{route('createEvent')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name"> Theme </label>
                        <input type="text" id="name" name="name" class="form-control">
                        {{$errors->first('name')}}
                    </div>
                    <div class="form-group">
                        <label for="place"> Lieu </label>
                        <input type="text" id="place" name="place" class="form-control">
                        {{$errors->first('place')}}
                    </div>
                    </div class="form-group">
                        <label for="prof"> Professeur </label>
                        <input type="text" id="prof" name="prof" class="form-control">
                        {{$errors->first('prof')}}
                    </div>
                    </div class="form-group">
                        <label for="date"> Date </label>
                        <input type="date" id="date" name="date" class="form-control">
                        {{$errors->first('date')}}
                    </div>

                    <button type="submit" class="btn btn-primary"> Envoyer </button>
                </form>
            </div>
        </div>
    </div>
@endsection