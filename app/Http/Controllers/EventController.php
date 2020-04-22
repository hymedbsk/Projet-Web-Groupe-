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
    public function selectEvent(Event $event){

        event::where('Event_Selected',1)
                    ->update(['Event_Selected'=>0]);    //reset

        event::where("id_Activite", $event->id_Activite)
                    ->update(['Event_Selected'=>1]);    //select
        $events = event::get();
        return view('testboutonselect', compact('events'));
    }

     // FUNCTION FOR TEST ONLY //

    public function listUserToEvent(){

        $events = event::get();
        $users = User::get();

        return view('/listEtu', compact('events', 'users'));

    }

    public function addUserToEvent(User $user){

        $event = event::first();
        $user->events()->syncWithoutDetaching([$event->id_Activite]);

        return redirect()->route('listUserByEvent');
    }

    public function removeUserFromEvent(User $user){

        $event = event::first();
        $user->events()->detach($event->id_Activite);

        return redirect()->route('listUserByEvent');
    }

    public function listEvent(){

        $events = event::get();
        return view('/tableEvent', compact('events'));
    }

    public function infoEvent (event $event){
        $event_id = $event->id_Activite;
        //echo($event_id);
        //echo(event::find($event_id));
        $users = event::find($event_id)->users;
        //echo(intval($users));
        return view('infoEvent', compact('event', 'users'));
    }

    // public function selectEvent(Event $event){
    //     event::all()->where('Event_Selected',1)
    //                 ->update('Event_Selected',0);
    //     event::get($event->id_Activite)->update('Event_Selected',1);
    //     return redirect()->route('listUserByEvent');
    // }


}
