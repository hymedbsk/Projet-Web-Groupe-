<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{

    public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'matricule' => ['required', 'string', 'max:8', 'unique:users'],
            'nom' => ['required', 'string', 'max:255', 'min:1'],
            'prenom' => ['required', 'string', 'max:255', 'min:1'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
		];
	}

}
