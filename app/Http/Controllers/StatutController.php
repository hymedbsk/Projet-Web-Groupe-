<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\User;
class StatutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	protected $userRepository;

    protected $nbrPerPage = 10;
	
	 public function __construct(UserRepository $userRepository)
	{
        $this->userRepository = $userRepository;

        $this->middleware('auth');
        $this->middleware('prof');
	}
    public function index()
    {
        $user = User::all();
	$users = $this->userRepository->getPaginate($this->nbrPerPage);
        $links = $users->render();
	return view('user.statut', compact('users','links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
	$user = User::findOrFail($id);
	
                     if($user->type == 'EN'){
            User::where('id','=', $user->id)->update(['type'=> 'PR']);
            Session::flash('message','Utilisateur mis        jour');
             return redirect('user');
            }
            else if($user->type == 'PR'){
             User::where('id','=', $user->id)->update(['type'=> 'EN']);
            Session::flash('message', 'Utilisateur mise        jour');
        return redirect('user');
            }else{

                return redirect('user');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
