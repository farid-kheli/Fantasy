<?php

namespace App\Http\Controllers;

use App\Models\Fantasieuserxi;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Matche;
use App\Models\Club;
use App\Models\Userhier;
use App\Models\Playepoint;
use App\Models\Userteam;
use App\Models\Flight;
use Number;
use PhpParser\Node\Expr\Match_;
class PlayerController extends Controller
{
    public function AdminPlayerProfiel($Player,$Fixtur){

        $Player = Player::where('id', $Player)->first();
        $PlayerPoints = Playepoint::where('PlayerID', $Player->id)->get();
        $FixturPoints = Playepoint::where('PlayerID', $Player->id)->where('FixtureN',$Fixtur)->first();
        $club = Club::where('ClubName',$Player->Club)->first();
        $Games = $results = Matche::where(function ($query)use ($club) {
            $query->where('Home', $club->id)->orWhere('Home', $club->id);
        })
        ->where('FixturN', $Fixtur)
        ->get();

        return view('AdminPlayerProfiel',['Games' => $Games,'Player' => $Player,'PlayerPoints' => $PlayerPoints,'Fixtur'=>$Fixtur,'FixturPoints' => $FixturPoints]);
    }
    public function PlayerProfiel($User,$Player,$Fixtur){

        $Player = Player::where('id', $Player)->first();
        $PlayerPoints = Playepoint::where('PlayerID', $Player->id)->get();
        $FixturPoints = Playepoint::where('PlayerID', $Player->id)->where('FixtureN',$Fixtur)->first();
        $club = Club::where('ClubName',$Player->Club)->first();
        $Games = $results = Matche::where(function ($query)use ($club) {
            $query->where('Home', $club->id)->orWhere('Home', $club->id);
        })
        ->where('FixturN', $Fixtur)->get();
        return view('PlayerProfiel',['User' => $User,'Games' => $Games,'Player' => $Player,'PlayerPoints' => $PlayerPoints,'Fixtur'=>$Fixtur,'FixturPoints' => $FixturPoints]);
    }
    public function OwnedPlayerProfiel($User,$Player,$Fixtur){

        $Player = Player::where('id', $Player)->first();
        $PlayerPoints = Playepoint::where('PlayerID', $Player->id)->get();
        $FixturPoints = Playepoint::where('PlayerID', $Player->id)->where('FixtureN',$Fixtur)->first();
        $club = Club::where('ClubName',$Player->Club)->first();
        $Games = $results = Matche::where(function ($query)use ($club) {
            $query->where('Home', $club->id)->orWhere('Home', $club->id);
        })
        ->where('FixturN', $Fixtur)
        ->get();
        return view('OwnedPlayerProfiel',['User' => $User,'Games' => $Games,'Player' => $Player,'PlayerPoints' => $PlayerPoints,'Fixtur'=>$Fixtur,'FixturPoints' => $FixturPoints]);
    }
    public function Bying($User,$Player,$Fixutur){
        Userhier::create([
            'User'=>$User,
            'Player'=>$Player,
        ]);
        return to_route('Fantasie.Club',[$User,$Fixutur]);
    }
    public function SaveFantasieXI($User,$FixturN){
        $Team = Userteam::where('User',$User)->first();
        
        $updateData['Formation'] = request()->Formation;
        if ( request()->Player1 != null) {
            $updateData['Player1'] = request()->Player1;
        }else{
            $updateData['Player1']  = null;
        }
        if ( request()->Player2 != null) {
            $updateData['Player2'] = request()->Player2;
        }else{
            $updateData['Player2']  = null;
        }
        if ( request()->Player3 != null) {
            $updateData['Player3'] = request()->Player3;
        }else{
            $updateData['Player3']  = null;
        }
        if ( request()->Player4 != null) {
            $updateData['Player4'] = request()->Player4;
        }else{
            $updateData['Player4']  = null;
        }
        if ( request()->Player5 != null) {
            $updateData['Player5'] = request()->Player5;
        }else{
            $updateData['Player5']  = null;
        }
        if ( request()->Player6 != null) {
            $updateData['Player6'] = request()->Player6;
        }else{
            $updateData['Player6']  = null;
        }
        if ( request()->Player7 != null) {
            $updateData['Player7'] = request()->Player7;
        }else{
            $updateData['Player7']  = null;
        }
        if ( request()->Player8 != null) {
            $updateData['Player8'] = request()->Player8;
        }else{
            $updateData['Player8']  = null;
        }
        if ( request()->Player9 != null) {
            $updateData['Player9'] = request()->Player9;
        }else{
            $updateData['Player9']  = null;
        }
        if ( request()->Player10 != null) {
            $updateData['Player10'] = request()->Player10;
        }else{
            $updateData['Player10']  = null;
        }
        if ( request()->Player11 != null) {
            $updateData['Player11'] = request()->Player11;
        }else{
            $updateData['Player11']  = null;
        }
        $Team->update($updateData);
        return to_route('Fantasie.Club',[$User,$FixturN]);
    }
    public function seling($User,$Player,$Fantasie){
        $Owned = Userhier::where('User', $User)->where('Player',$Player)->first(); 
        $Owned->delete();
        return to_route('Fantasie.Club',[$User,$Fantasie]);
    }
    public function UpdatePlayerPoint($Player,$Fixtur){
        $FixturPoints = Playepoint::where('PlayerID', $Player)->where('FixtureN',$Fixtur)->first();
        $Player = Player::where('id',$Player)->first();
        $Player->update([
            'Points'=> $Player->Points - $FixturPoints->TOTALPOINTS,
            'Gols'=> $Player->Gols - $FixturPoints->Goals,
            'assiste'=> $Player->assiste - $FixturPoints->GoalAssists,

        ]);
        $FixturPoints->update([
            'MatchePlayed'=>request()->MinutePlayed,
            'Goals'=>request()->Goals,
            'GoalAssists'=>request()->GoalAssists,
            'BigChanceCreated'=>request()->BigChanceCreated,
            'BallsIntoTheBox'=>request()->BallsIntoTheBox,
            'PinaltiesSaved'=>request()->PinaltiesSaved,
            'Saves'=>request()->Saves,
            'EffectiveClearances'=>request()->EffectiveClearances,
            'PenaltiesMissed'=>request()->PenaltiesMissed,
            'OwnGoals'=>request()->OwnGoals,
            'YellowCard'=>request()->YellowCard,
            'RedCard'=>request()->RedCard,
            'EffectiveDribbles'=>request()->EffectiveDribbles,
            'Recoveries'=>request()->Recoveries,
            'LostBalls'=>request()->LostBalls,
            'AddisionallPoints'=>request()->AddisionallPoints,
            'TOTALPOINTS'=>request()->TOTALPOINTS,
        ]);
        $Player->update([
            'Points'=> $Player->Points + $FixturPoints->TOTALPOINTS,
            'Gols'=> $Player->Gols + $FixturPoints->Goals,
            'assiste'=> $Player->assiste + $FixturPoints->GoalAssists,
            'situation_id'=>(int)request()->situation,
        ]);
        $FPs = Playepoint::where('PlayerID', $Player->id)->get();
        $count=0;
        foreach ($FPs as $FP) {
            $count++;
        }
        $Player->update([
            'Avrege'=> $Player->Points / $count,
        ]);
        return to_route('Player.Profiel.Admin',[$Player,$Fixtur]);
    }
}
