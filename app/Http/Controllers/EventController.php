<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\DB;
use OpenApi\Annotations as OA;
class EventController extends Controller
{


    public function __construct()
	{
        $this->middleware('auth');

	}

    /**
     * @OA\Get(path="/event",
     *      @OA\Response(
     *          reponse="200",
     *          description="Nos event",
     *                    @OA\JsonContent(type="string", nom="Nom de l'event"),
     *
     *         )
     *)
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
        $users =  DB::table('document')->where('doc_id','=','1')->get();
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
        $users =  DB::table('users')->where('prof','=','1')->get();
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
