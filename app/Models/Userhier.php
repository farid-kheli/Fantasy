<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userhier extends Model
{
    use HasFactory;
    protected $fillable = [
        'User',
        'Player',
    ];
    function getPlayer($id){
        return Player::where('Id',$id)->first();
    }
    function Points($id){
        return Playepoint::where('PlayerID',$id)->first();
    }
}
