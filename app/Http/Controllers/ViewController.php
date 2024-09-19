<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
class ViewController extends Controller
{
    public function LeagueTabul(){
        return view('LeagueTabule');
    }
    public function MAtchesPage(){
        return view('MatchePage');
    }
    public function Player($by){
        $players = Player::orderBy($by, 'desc')->get();
        return view('Players',['players'=>$players]);
    }
    public function PlanWeek(){
        return view('Week');
    }
    public function FantasieClub(){
        return view('FantasieClub');
    }
    public function singup(){
        return view('singup');
    }
}
