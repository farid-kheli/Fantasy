<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userteam extends Model
{
    use HasFactory;
    protected $fillable = [

        'User',
        'Player1',
        'Player2',
        'Player3',
        'Player4',
        'Player5',
        'Player6',
        'Player7',
        'Player8',
        'Player9',
        'Player10',
        'Player11',
        'Formation',
    ];
    public function getplayer($id){
        return Player::where('id',$id)->first();
    }
}
