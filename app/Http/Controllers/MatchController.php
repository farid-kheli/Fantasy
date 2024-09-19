<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matche;
use App\Models\Matcheteams;


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

    public function UpdatInfo($Match,$Info){
        $Match = Matche::where('id',$Match)->first();
        $Info = Matcheteams::where('id',$Info)->first();
        $Info->update([
            //'Home1'=> request()->Home1,
            //'Home2'=> request()->Home2,
            //'Home3'=> request()->Home3,
            //'Home4'=> request()->Home4,
            //'Home5'=> request()->Home5,
            //'Home6'=> request()->Home6,
            //'Home7'=> request()->Home7,
            //'Home8'=> request()->Home8,
            //'Home9'=> request()->Home9,
            //'Away1'=> request()->Away1,
            //'Away2'=> request()->Away2,
            //'Away3'=> request()->Away3,
            //'Away4'=> request()->Away4,
            //'Away5'=> request()->Away5,
            //'Away6'=> request()->Away6,
            //'Away7'=> request()->Away7,
            //'Away8'=> request()->Away8,
            //'Away9'=> request()->Away9,
            'HomePosition'=>request()->HomePosition,
            'AwayPosition'=>request()->AwayPosition,
            'HomeShoot'=>request()->HomeShoot,
            'AwayShoot'=>request()->AwayShoot,
            'HomeOnterget'=>request()->HomeOnterget,
            'AwayOnterget'=>request()->AwayOnterget,
            'homeFowls'=>request()->homeFowls,
            'AwayFowls'=>request()->AwayFowls,
            'homeYelow'=>request()->homeYelow,
            'AwayYelow'=>request()->AwayYelow,
            'homeRed'=>request()->homeRed,
            'AwayRed'=>request()->AwayRed,
            'homecorners'=>request()->homecorners,
            'Awaycorners'=>request()->Awaycorners,
            'homeoffsieds'=>request()->homeoffsieds,
            'Awayoffsieds'=>request()->Awayoffsieds,
        ]);
        return to_route('Game.Carde',$Match);
    }
}
