<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('success', 'User has been created!');
    }

    public function logout(){
        auth()->logout();

        return redirect('/')->with('success', 'User logged out!');
    }

    public function login(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'password' => ['required', 'min:6'],
        ]);
    }
}
