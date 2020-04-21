@extends('layouts.app')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Theme</th>
            <th>Professeur</th>
            <th>Event sélectionné</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
            <tr>
                <td>{!! $event->id_Activite !!}</td>
                <td class="text-primary"><strong>{!! $event->Theme !!}</strong></td>
                <td class="text-primary"><strong>{!! $event->Organisateur !!}</strong></td>
                <td class="text-primary"><strong>{!! $event->Event_Selected !!}</strong></td>
                <td> <a class="btn btn-primary" href="{{route('selectEvent', $event)}}" role="button">Sélectionner</a></td>
            </tr>
        @endforeach  
    </tbody>
</table>
@endsection