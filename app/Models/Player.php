<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Price',
        'Club',
        'Position',
        'Pictur',
        'Points',
        'Avrege',
        'Gols',
        'assiste',
        'situation_id',
    ];
    
    public function getTeam($name){
        return Club::where('ClubName',$name)->first();
    }
    public function getplayer($id){
        return Player::where('id',$id)->first();
    }

    public function getsetuation($id){
        return Situation::where('id',$id)->first();
    }
}
