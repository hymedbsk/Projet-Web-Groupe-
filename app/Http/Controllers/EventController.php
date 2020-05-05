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

    public function globalView(){

        $events = event::get();
        $users = User::get();

        return view('/globalView', compact('events', 'users'));

    }

    public function listEvent(){

        $events = event::get();

        return view('/tableEvent', compact('events'));
    }

    public function infoEvent (event $event){

        $event_id = $event->id_Activite;
        $users = event::find($event_id)->users;
        
        return view('infoEvent', compact('event', 'users'));
    }

    public function manageEvent (event $event){
        
        $event_id = $event->id_Activite;

        $event = $event;

        #echo($event_id);
        
        // utilisateur d'un event
        $users = User::join('userbyevent', 'users.id', '=','userbyevent.id')
            ->select('*')
            ->where('id_Activite', '=', $event_id)
            ->get();
        #echo($users);
        
        // utilisateurs ne participant pas à l'event et n'ayant pas d'event

        // select * FROM `users` 
        // LEFT JOIN userbyevent on users.id = userbyevent.id 
        // where userbyevent.id not in ( 
        //     SELECT userbyevent.id 
        //     FROM `userbyevent` LEFT JOIN users on users.id = userbyevent.id 
        //     WHERE id_Activite = 2) 
        // UNION SELECT * FROM `users` 
        // LEFT JOIN userbyevent on users.id = userbyevent.id 
        // WHERE userbyevent.id is null

        //on sélectionne les utilisateurs ne participant à aucun évènements
        $nonEventUsers = User::leftJoin('userbyevent', 'users.id', '=','userbyevent.id')
                ->select('users.id')
                ->whereNull('userbyevent.id');

        // utilisateurs de l'évènement
        $userEvent = userbyevent::leftJoin('users', 'users.id', '=','userbyevent.id')
            ->select('userbyevent.id')
            ->where('id_Activite', '=', $event_id);
        
        #echo($userEvent);
        
         // NOT($userEvent) UNION $nonEventUsers
        $nonUsers = User::select('id')
             ->whereNotIn('id', $userEvent) // id != $users->id ?
             ->union($nonEventUsers);

        $final = User::select('*')
            ->whereIn('id', $nonUsers)
            ->get();
        #echo($final);
        return view('manageEvent', compact('users', 'final', 'event'));
    }

    public function addUserToEvent(User $user, event $event){

        echo($user);
        echo($event);

        //$user->events()->syncWithoutDetaching([$event->id_Activite]);
        
        //return redirect()->route('manageEvent');
    }

    public function removeUserFromEvent(User $user, event $event){

        echo($user);
        echo($event);

        //$user->events()->detach($event->id_Activite);

        //return redirect()->route('manageEvent',['event'=>$event]);
            
        //
    }

    public function test(User $user, event $event){
        echo($user);
        echo($event);
    }

    /////////////////////////////////////////////////
    /////////       CREATE A EVENT          ///////// 
    /////////////////////////////////////////////////

    public function createEvent(){
        echo("test");
        // $data = request()->validate([

        //     'name' => 'required|min:3',
        //     'place' => 'required|min:3',
        //     'prof' => 'required|min:3'

        // ]);
        // print_r($request);
        #echo($request->input('prof'));
        #return redirect()->route('newEvent');
    }
}
