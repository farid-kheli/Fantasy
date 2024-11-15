<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function NewUser(){
        request()->validate([
            'UserName'=> ['required','unique:users,name'],
            'email'=> ['required','email','unique:users,email'],
            'password'=>'required',
        ]);
        User::create([
            'name'=>request()->UserName,
            'email'=>request()->email,
            'password'=>hash::make(request()->password),
        ]);
        return to_route('Singup');
    }
    public function login(){
        $credentials = request()->only("email", "password");
        if (Auth::attempt($credentials)) {
            return to_route('home');
        }
        return to_route('Singup')->with('wrong','email or password wrong');
        
    }
}
