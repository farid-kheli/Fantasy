<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixturteam extends Model
{
    use HasFactory;
    protected $fillable = [
        'TeamID',
        'FixturN',
        'player1',
        'player2',
        'player3',
        'player4',
        'player5',
        'player6',
        'player7',
        'player8',
        'player9',
        'player10',
        'player11',
        'formaton',
    ];
    function GetPlayer($id){
        return Player::where('id',$id)->first();
    }
    
}
