<?php

namespace App\Http\Controllers;

use App\Models\Fixtur;
use App\Models\Player;
use Illuminate\Http\Request;
use App\Models\Matche;
use App\Models\Club;
use App\Models\Playepoint;
use App\Models\Fixturteam;
use Carbon\Carbon;


class MatchController extends Controller
{
    public function UpdateMatch($Match)
    {
        $Match = Matche::where('id',$Match)->first();
        $matchenumber = request()->matchenumber;
        if($matchenumber=='first'){
            $Match->update([
                'firstHome' => request()->home,
                'firstAway' => request()->away,
            ]);
        }
        if($matchenumber=='secend'){
            $Match->update([
                'secendHome' => request()->home,
                'secendAway' => request()->away,
            ]);
        }
        if($matchenumber=='thirde'){
            $Match->update([
                'thirdeHome' => request()->home,
                'thirdeAway' => request()->away,
            ]);
        }

        
        return to_route('Admin.Matches');
    }
    public function StartGame($id){
        $Matche=Matche::where('id',$id)->first();
        $Matche->update([
            'Time'=>Carbon::now()
        ]);
        return to_route('Fixtur.Admin');
    }
    public function EndGame($id){
        $Matche=Matche::where('id',$id)->first();
        $Matche->update([
            'EndTime'=>Carbon::now()
        ]);
        if($Matche->GoalHome > $Matche->GoalAway){
            $team=$Matche->Home;
        }else{
            $team=$Matche->Away;
        }
        //dd($team);
        $Fixtur=Fixtur::where('id',$Matche->FixturN)->first();
        
        if($Fixtur->team0==$team && $Fixtur->team8==null && $Fixtur->team12==null && $Fixtur->team14==null){
            $Fixtur->update([
                'team8'=>$team
            ]);
            if($Fixtur->team9!=null){
                Matche::create([
                    'Home'=>$Fixtur->team8,
                    'Away'=>$Fixtur->team9,
                    'FixturN'=>$Fixtur->id,
                    'GoalHome'=>0,
                    'GoalAway'=>0,
                ]);
            }
        }       
        elseif($Fixtur->team1==$team && $Fixtur->team8==null && $Fixtur->team12==null && $Fixtur->team14==null){
            $Fixtur->update([
                'team8'=>$team
            ]);
            if($Fixtur->team9!=null){
                Matche::create([
                    'Home'=>$Fixtur->team8,
                    'Away'=>$Fixtur->team9,
                    'FixturN'=>$Fixtur->id,
                    'GoalHome'=>0,
                    'GoalAway'=>0,
                ]);
            }
        }       
        elseif($Fixtur->team2==$team && $Fixtur->team9==null && $Fixtur->team12==null && $Fixtur->team14==null){
            $Fixtur->update([
                'team9'=>$team
            ]);
            if($Fixtur->team8!=null){
                Matche::create([
                    'Home'=>$Fixtur->team8,
                    'Away'=>$Fixtur->team9,
                    'FixturN'=>$Fixtur->id,
                    'GoalHome'=>0,
                    'GoalAway'=>0,
                ]);
            }
        }       
        elseif($Fixtur->team3==$team && $Fixtur->team9==null && $Fixtur->team12==null && $Fixtur->team14==null){
            $Fixtur->update([
                'team9'=>$team
            ]);
            if($Fixtur->team8!=null){
                Matche::create([
                    'Home'=>$Fixtur->team8,
                    'Away'=>$Fixtur->team9,
                    'FixturN'=>$Fixtur->id,
                    'GoalHome'=>0,
                    'GoalAway'=>0,
                ]);
            }
        }       
        elseif($Fixtur->team4==$team && $Fixtur->team10==null && $Fixtur->team13==null && $Fixtur->team14==null){
            $Fixtur->update([
                'team10'=>$team
            ]);
            if($Fixtur->team11!=null){
                Matche::create([
                    'Home'=>$Fixtur->team10,
                    'Away'=>$Fixtur->team11,
                    'FixturN'=>$Fixtur->id,
                    'GoalHome'=>0,
                    'GoalAway'=>0,
                ]);
            }
        }       
        elseif($Fixtur->team5==$team && $Fixtur->team10==null && $Fixtur->team13==null && $Fixtur->team14==null){
            $Fixtur->update([
                'team10'=>$team
            ]);
            if($Fixtur->team11!=null){
                Matche::create([
                    'Home'=>$Fixtur->team10,
                    'Away'=>$Fixtur->team11,
                    'FixturN'=>$Fixtur->id,
                    'GoalHome'=>0,
                    'GoalAway'=>0,
                ]);
            }
        }       
        elseif($Fixtur->team6==$team && $Fixtur->team11==null && $Fixtur->team13==null && $Fixtur->team14==null){
            $Fixtur->update([
                'team11'=>$team
            ]);
            if($Fixtur->team10!=null){
                Matche::create([
                    'Home'=>$Fixtur->team10,
                    'Away'=>$Fixtur->team11,
                    'FixturN'=>$Fixtur->id,
                    'GoalHome'=>0,
                    'GoalAway'=>0,
                ]);
            }
        }       
        elseif($Fixtur->team7==$team && $Fixtur->team11==null && $Fixtur->team13==null && $Fixtur->team14==null){
            $Fixtur->update([
                'team11'=>$team
            ]);
            if($Fixtur->team10!=null){
                Matche::create([
                    'Home'=>$Fixtur->team10,
                    'Away'=>$Fixtur->team11,
                    'FixturN'=>$Fixtur->id,
                    'GoalHome'=>0,
                    'GoalAway'=>0,
                ]);
            }
        }       
        elseif($Fixtur->team8==$team && $Fixtur->team12==null && $Fixtur->team14==null){
            $Fixtur->update([
                'team12'=>$team
            ]);
            if($Fixtur->team13!=null){
                Matche::create([
                    'Home'=>$Fixtur->team12,
                    'Away'=>$Fixtur->team13,
                    'FixturN'=>$Fixtur->id,
                    'GoalHome'=>0,
                    'GoalAway'=>0,
                ]);
            }
        }       
        elseif($Fixtur->team9==$team && $Fixtur->team12==null && $Fixtur->team14==null){
            $Fixtur->update([
                'team12'=>$team
            ]);
            if($Fixtur->team13!=null){
                Matche::create([
                    'Home'=>$Fixtur->team12,
                    'Away'=>$Fixtur->team13,
                    'FixturN'=>$Fixtur->id,
                    'GoalHome'=>0,
                    'GoalAway'=>0,
                ]);
            }
            
        }       
        elseif($Fixtur->team10==$team && $Fixtur->team13==null && $Fixtur->team14==null){
            $Fixtur->update([
                'team13'=>$team
            ]);
            if($Fixtur->team12!=null){
                Matche::create([
                    'Home'=>$Fixtur->team12,
                    'Away'=>$Fixtur->team13,
                    'FixturN'=>$Fixtur->id,
                    'GoalHome'=>0,
                    'GoalAway'=>0,
                ]);
            }
        }       
        elseif($Fixtur->team11==$team && $Fixtur->team13==null && $Fixtur->team14==null){
            $Fixtur->update([
                'team13'=>$team
            ]);
            if($Fixtur->team12!=null){
                Matche::create([
                    'Home'=>$Fixtur->team12,
                    'Away'=>$Fixtur->team13,
                    'FixturN'=>$Fixtur->id,
                    'GoalHome'=>0,
                    'GoalAway'=>0,
                ]);
            }
        }       
        elseif($Fixtur->team12==$team){
            $Fixtur->update([
                'team14'=>$team
            ]);
        }       
        elseif($Fixtur->team13==$team){
            $Fixtur->update([
                'team14'=>$team
            ]);
        }

        
    
        return to_route('Fixtur.Admin');
    }
    public function ScoorGame($who,$id){
        $Matche=Matche::where('id',$id)->first();
        if($who=='Home'){
        $Matche->update([
            'GoalHome'=>$Matche->GoalHome+1
        ]);}
        if($who=='Away'){
        $Matche->update([
            'GoalAway'=>$Matche->GoalAway+1
        ]);}

        return to_route('Fixtur.Admin');
    }

    public function UpdatInfo($Club,$Fixtur){
        //$Match = Matche::where('id',$Match)->first();
        $Info = Fixturteam::where('FixturN',$Fixtur)->where('TeamID',$Club)->first();
        $updateData = [
            'formaton' => request()->formation,
        ];
        if ( request()->player1 !== null) {
            $updateData['player1'] = request()->player1;
        }else{
            $updateData['player1']  = null;
        }
        if ( request()->player2 !== null) {
            $updateData['player2'] = request()->player2;
        }else{
            $updateData['player2']  = null;
        }
        if ( request()->player3 !== null) {
            $updateData['player3'] = request()->player3;
        }else{
            $updateData['player3']  = null;
        }
        if ( request()->player4 !== null) {
            $updateData['player4'] = request()->player4;
        }else{
            $updateData['player4']  = null;
        }
        if ( request()->player5 !== null) {
            $updateData['player5'] = request()->player5;
        }else{
            $updateData['player5']  = null;
        }
        if ( request()->player6 !== null) {
            $updateData['player6'] = request()->player6;
        }else{
            $updateData['player6']  = null;
        }
        if ( request()->player7 !== null) {
            $updateData['player7'] = request()->player7;
        }else{
            $updateData['player7']  = null;
        }
        if ( request()->player8 !== null) {
            $updateData['player8'] = request()->player8;
        }else{
            $updateData['player8']  = null;
        }
        if ( request()->player9 !== null) {
            $updateData['player9'] = request()->player9;
        }else{
            $updateData['player9']  = null;
        }
        if ( request()->player10 !== null) {
            $updateData['player10'] = request()->player10;
        }else{
            $updateData['player10']  = null;
        }
        if ( request()->player11 !== null) {
            $updateData['player11'] = request()->player11;
        }else{
            $updateData['player11']  = null;
        }
        //$Info->update([ 
        //    'player1'=> request()->player1,
        //    'player2'=> request()->player2,
        //    'player3'=> request()->player3,
        //    'player4'=> request()->player4,
        //    'player5'=> request()->player5,
        //    'player6'=> request()->player6,
        //    'player7'=> request()->player7,
        //    'player8'=> request()->player8,
        //    'player9'=> request()->player9,
        //    'player10'=> request()->player10,
        //    'player11'=> request()->player11,
        //    'formaton' => request()->formation,
        //]);
        
        $Info->update($updateData);
        return to_route('Game.Carde',[$Club,$Fixtur]);
    }
}
