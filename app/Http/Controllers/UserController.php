<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userRepository;

    protected $nbrPerPage = 4;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(UserUpdateRequest $request, $id)
    {
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
        $links = $users->render();


        $this->setAdmin($request);

		$this->userRepository->update($id, $request->all());
        return view('user', compact('users', 'links'));
    }
    public function show($id)
    {
        $user = $this->userRepository->getById($id);

        return view('show',  compact('user'));
    }
    public function update( $id)
	{
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
        $links = $users->render();
		$this->userRepository->update($id, $request->all());
        return view('user', compact('users', 'links'));


	}
    private function setAdmin($request)
    {
        if(!$request->has('admin'))
        {
            $request->merge(['admin' => 0]);
        }
    }
}
