<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //show register/create form
    public function create(){
        return view('users.register');
    }

    //store new user
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //hash password
        $formFields['password'] =bcrypt($formFields['password']);

        //create user
        $user = User::create($formFields);

        //Login user
        auth()->login($user);

        return redirect('/')->with('message', 'user created and logedin successfully');
    }

    //logout
    public function logout(Request $request){
        auth()->logout();
    }
}
