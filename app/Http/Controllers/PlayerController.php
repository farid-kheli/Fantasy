<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
class PlayerController extends Controller
{
    public function AdminPlayerProfiel($Player){

        $Player = Player::where('id', $Player)->first();
        return view('AdminPlayerProfiel',['Player' => $Player]);
    }
    public function PlayerProfiel($Player){

        $Player = Player::where('id', $Player)->first();
        return view('PlayerProfiel',['Player' => $Player]);
    }
}
