<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegistrationRequest;
use App\Models\User; 

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(UserRegistrationRequest $request)
    {

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return 'User registered successfully!';
    }
}
