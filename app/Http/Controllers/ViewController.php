<?php

namespace App\Http\Controllers;

use App\Models\Fantasieuserxi;
use Illuminate\Http\Request;
use App\Models\Player;
use Carbon\Carbon;
use App\Models\Userhier;
use App\Models\Club;
use App\Models\Userteam;
use App\Models\Fixtur;
class ViewController extends Controller
{
    public function LeagueTabul()
    {
        $Clubs= Club::all();
        return view('LeagueTabule',['Clubs'=>$Clubs]);
    }
    public function FantasiePoints($ID,$Fixur)
    {
        

        $Owned = Userhier::where('User', $ID)->get(); 

        $ownedPlayerIds = $Owned->pluck('Player');
        $FixturN=Fixtur::latest()->first();
        if($FixturN!=null){
        $FixturN=$FixturN->id + 1;
    }else{
        $FixturN = 1;
    }


        $Players = Player::whereNotIn('id', $ownedPlayerIds)->get();
        $Global=Fantasieuserxi::where('User',$ID)->get();
        //dd($Owned,$Players);
        $Team = Fantasieuserxi::where('User',$ID)->where('FixturN',$Fixur)->first();
        $Fixur= Fixtur::where('id',$Fixur)->first();
        $serverTime = Carbon::now();
        //dd($ID,$FixturN,$Team);
        return view('FantasieClub2', ['serverTime' => $serverTime,'Team' => $Team,'Global' => $Global,'FixturN' => $FixturN,'Owned' => $Owned,'Fixur' => $Fixur, 'User' => $ID, 'Players' => $Players]);
    
    }
    public function MAtchesPage()
    {
        return view('MatchePage');
    }
    public function Player($by)
    {
        $players = Player::orderBy($by, 'desc')->get();
        return view('Players', ['players' => $players]);
    }
    public function PlanWeek($number)
    {
        $AllFixtur=Fixtur::all();
        $Fixtur= Fixtur::where('id',$number)->first();
        $time= Carbon::now();
        return view('Week',['time'=>$time,'Fixtur'=>$Fixtur,'AllFixtur'=>$AllFixtur]);
    }
    public function FantasieClub($ID,$Fixur)
    {

        $Owned = Userhier::where('User', $ID)->get(); 

        $ownedPlayerIds = $Owned->pluck('Player');
        $FixturN=Fixtur::latest()->first();
        if($FixturN!=null){
        $FixturN=$FixturN->id + 1;
    }else{
        $FixturN = 1;
    }
    

        $Players = Player::whereNotIn('id', $ownedPlayerIds)->get();
        $Global=Fantasieuserxi::where('User',$ID)->get();
        //dd($Owned,$Players);
        $Team = Userteam::where('User',$ID)->first();
        $Fixur= Fixtur::where('id',$Fixur)->first();
        $serverTime = Carbon::now();
        //dd($ID,$FixturN,$Team);
        return view('FantasieClub', ['serverTime' => $serverTime,'Team' => $Team,'Global' => $Global,'FixturN' => $FixturN,'Owned' => $Owned,'Fixur' => $Fixur, 'User' => $ID, 'Players' => $Players]);
    }
    public function singup()
    {
        return view('singup');
    }
}
