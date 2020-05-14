<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use App\Event;
use App\User;
use App\userbyevent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    protected $eventRepository;

    public function __construct(){

        $this->middleware('auth');
        $this->middleware('admin');

    }
    // FUNCTION FOR TEST ONLY //

    public function test(){

        #$events = DB::table('event')->get();
        $events = Event::all();
        $users = User::get();
        echo($users);
        echo($events);
    }

     // FUNCTION FOR TEST ONLY //

    public function globalView(){

        $events = Event::get();
        #echo($events);
        $users = User::get();

        return view('/globalView', compact('events', 'users'));

    }

    public function listEvent(){

        $events = DB::table('event')->get();

        return view('/tableEvent', ['events'=>$events]);
    }

    public function infoEvent ($event_id){

        //$event_id = $event_id;
        $event = Event::find($event_id);

        $users = Event::find($event_id)->users;

        return view('infoEvent', compact('event', 'users'));
    }

    public function manageEvent (Event $event){
        
        $event_id = $event->id_Activite;

        $event = $event;

        #echo($event_id);
        
        // utilisateur d'un event
        $users = User::join('userbyevent', 'users.User_id', '=','userbyevent.id')
            ->select('*')
            ->where('id_Activite', '=', $event_id)
            ->get();

        //on sélectionne les utilisateurs ne participant à aucun évènements
        $nonEventUsers = User::leftJoin('userbyevent', 'users.User_id', '=','userbyevent.id')
                ->select('users.User_id')
                ->whereNull('userbyevent.id');

        // utilisateurs de l'évènement
        $userEvent = userbyevent::leftJoin('users', 'users.User_id', '=','userbyevent.id')
            ->select('userbyevent.id')
            ->where('id_Activite', '=', $event_id);
        
         // NOT($userEvent) UNION $nonEventUsers
        $nonUsers = User::select('User_id')
             ->whereNotIn('User_id', $userEvent) 
             ->union($nonEventUsers);

        $final = User::select('*')
            ->whereIn('User_id', $nonUsers)
            ->get();
        return view('manageEvent', compact('users', 'final', 'event'));
    }

    public function addUserToEvent(User $user, Event $event){

        echo($user);
        echo($event);

        $user->events()->syncWithoutDetaching([$event->id_Activite]);
        
        return redirect()->route('manageEvent',['event'=>$event]);
    }

    public function removeUserFromEvent(User $user, Event $event){

        echo($user);
        echo($event);

        $user->events()->detach($event->id_Activite);

        return redirect()->route('manageEvent',['event'=>$event]);
            
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('event.list', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users =  User::where('prof','=','1')->get();
        return view('event.add', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $events =  new Event;
        $events->nom = $request->input('nom');
        $events->Local = $request->input('local');
        $events->Date = $request->input('date');
        $events->Organisateur = $request->input('orga');
        $events->save();

        return redirect('event');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events= Event::findOrFail($id);
        $users =  tablUser::e('users')->where('prof','=','1')->get();
        if(auth()->user()->prof !== 1){

            return redirect(route('event.index'));

        }
      return view('event.edit', compact('users', 'events'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $events =  Event::findOrFail($id);
        $events->nom = $request->input('nom');
        $events->Local = $request->input('local');
        $events->Date = $request->input('date');
        $events->Organisateur = $request->input('orga');
        $events->save();

        return redirect('event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::findOrFail($id);;
        if(auth()->user()->prof !== 1){

        return redirect(route('event.index'));

        }

        $events->delete();
		return redirect(route('event.index'));
    }

}
