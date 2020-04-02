@if(count($errors) > 0)
    @foreach ($errors->all() as $error){
        <div class="alert alert-danger">
            {{$error}}
        </div>
    }
    @endforeach
@endif

@if(session('sucess'))
    <div class="alert alert-success">
        {{session('Succès')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-success">
        {{session('erreur')}}
    </div>
@endif
