<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Session;
use App\Repositories\UserRepository;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    protected $userRepository;
    protected $nbrPerPage = 4;

    public function __construct(UserRepository $userRepository)
        {	
		        $this->middleware('prof');

                $this->userRepository = $userRepository;
        }

    public function index()
    {
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
                $links = $users->render();

                return view('user.admin', compact('users', 'links'));
    }
	 public function admin($user){
                 $userToValid = User::findOrFail($user);


                if($userToValid->prof == 0){
                User::where('id','=', $userToValid->id)->update(['prof'=> 1]);
                Session::flash('message','Utilisateur mis    jour');
                 return redirect('admin');
                }
                else if($userToValid->prof == 1){
                 User::where('id','=', $userToValid->id)->update(['prof'=> 0]);
           Session::flash('message', 'Utilisateur mise    jour');
            return redirect('admin');

                }
        }

        public function delAdmin(User $user){
           $userToValid = $user;

           User::where('id','=', $userToValid->id)->update(['prof'=> 0]);
           Session::flash('message', 'Utilisateur mise    jour');
            return redirect('user');

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
    public function update(Request $request, $id)
    {
        //
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
