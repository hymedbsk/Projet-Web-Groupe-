<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    protected $userRepository;

    protected $nbrPerPage = 10;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
        $links = $users->render();

        return view('user', compact('users', 'links'));
    }
    public function show($id)
    {
        $user = $this->userRepository->getById($id);

        return view('show',  compact('user'));
    }
    private function setAdmin($request)
    {
        if(!$request->has('admin'))
        {
            $request->merge(['admin' => 0]);
        }   
    }   
    
    public function list(){
       
        $users = User::get();
        
        return view('/listEtu', compact('users'));
    }

    public function deleteInvalidUser(User $user){
        $userToDelete = $user;
        
        User::where('id','=', $userToDelete->id)->delete();

        return redirect()->route('list');
    }

    public function validUser(User $user){
        $userToValid = $user;
        
        User::where('id','=', $userToValid->id)->update(['accountChecked'=> 1]);

        return redirect()->route('list');
    }
}