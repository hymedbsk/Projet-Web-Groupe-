<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use App\event;
use App\User;
use App\userbyevent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    protected $eventRepository;

    public function __construct__(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }
    // FUNCTION FOR TEST ONLY //
    public function index()
    {   
        // $test = User::first();
        // $test->events()->sync([3]);

        //dd(event::first()->users()->toSql()); 

        $events = event::get();
        $users = User::get();
        $userbyevent = userbyevent::get();
        return view('testPivotTable', compact('events', 'users','userbyevent'));
    }
     // FUNCTION FOR TEST ONLY //

    public function listUserToEvent(){

        $events = event::get();
        $users = User::get();
        return view('/listEtu', compact('events', 'users'));

    }

    public function addUserToEvent(User $user){
        $event = event::first();
        //$user = User::first();
        $user->events()->syncWithoutDetaching([$event->id_Activite]);

        return redirect()->route('listUserByEvent');
    }
}
