@if(Session::has('message'))
        <div class="alert alert-success">
        	{{ Session::get('message') }}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
    </div>
@endif

