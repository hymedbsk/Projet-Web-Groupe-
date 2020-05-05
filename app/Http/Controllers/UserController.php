<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{

    protected $userRepository;

    protected $nbrPerPage = 4;

    public function __construct(UserRepository $userRepository)
	    {
		$this->middleware('prof'); 
		$this->userRepository = $userRepository;
		/*$this->middleware('prof');*/
	}

	public function index()
	{
		$users = $this->userRepository->getPaginate($this->nbrPerPage);
		$links = $users->render();

		return view('user.UserList', compact('users', 'links'));
	}

	public function create()
	{
		return view('create');
	}

	public function store(UserCreateRequest $request)
	{
		$user = $this->userRepository->store($request->all());

		return redirect('user.UserList')->withOk("L'utilisateur " . $user->name . " a été créé.");
	}

	public function show($id)
	{
		$user = $this->userRepository->getById($id);

		return view('show',  compact('user'));
	}

	public function edit($id)
	{
		$user = $this->userRepository->getById($id);

		return view('user.edit',  compact('user'));
	}

	public function update(UserUpdateRequest $request, $id)
	{
		  $user = User::findOrFail($id);
		  $user->matricule = $request->input('matricule');
       		  $user->nom = $request->input('nom');
        	  $user->prenom = $request->input('prenom');
	 	  $user->email = $request->input('email');
        	  $user->save();
	
		 return redirect('user');
		   	

	}
	public function statut($id){

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

	public function destroy($id)
	{
		$this->userRepository->destroy($id);

		return back();
	}
   /* private function Admin($request)
    {
        if(!$request->has('admin'))
        {
            $request->merge(['admin' => 0]);
        }
    }*/
}
