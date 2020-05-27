<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
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
		return view('user.create');
	}

	public function store(UserCreateRequest $request)
	{

		  $user = new User;
		  $user->matricule = $request->input('matricule');
       		  $user->nom = $request->input('nom');
        	  $user->prenom = $request->input('prenom');
	 	  $user->email = $request->input('email');
		  $user->password = Hash::make($request->input('password'));
		  $user->type = $request->input('Type');

        	  $user->save();



		 Session::flash('message', 'Utilisateur crée');
		return redirect('user');
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

	////////////////////////
	/// code Antoine ///////
	////////////////////////

    public function list(){
       
        $users = User::get();
        
        return view('/event/listEtu', compact('users'));
    }

    public function deleteInvalidUser(User $user){
        $userToDelete = $user;
        
        User::where('id','=', $userToDelete->id)->delete();

        return redirect()->route('list');
    }

    public function validUser(User $user){
        $userToValid = $user;
        
        User::where('id','=', $userToValid->id)->update(['verifier'=> 1]);

        return redirect()->route('list');
    }

	////////////////////////
	// fin code  Antoine ///
	////////////////////////

   /* private function Admin($request)
    {
        if(!$request->has('admin'))
        {
            $request->merge(['admin' => 0]);
        }
    }*/
}
