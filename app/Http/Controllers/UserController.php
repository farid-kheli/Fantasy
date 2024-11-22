<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Userteam;

class UserController extends Controller
{

    public function NewUser()
    {
        request()->validate([
            'UserName' => ['required', 'unique:users,name'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => 'required',
        ]);
        $user=User::create([
            'name' => request()->UserName,
            'email' => request()->email,
            'password' => hash::make(request()->password),
        ]);
        Userteam::create([
            'User'=>$user->id
        ]);
        
        return to_route('login');
    }
    public function login()
    {
        $user = User::where('email', request()->email)->first();
        //dd($user, get_class($user), $user instanceof Illuminate\Contracts\Auth\Authenticatable);

        if ($user && Hash::check(request()->password, $user->password)) {
            Auth::login($user);
            return to_route('home');
        } else {
            return to_route('login')->with('wrong', 'email or password wrong');
        }


    }
}
