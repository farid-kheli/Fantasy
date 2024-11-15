<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;
    protected $fillable = [
        'Home',
        'Away',
        'Time',
        'FixturN',
        'EndTime',
        'GoalHome',
        'GoalAway',

    ];
    function getClub($id){
        return Club::where('id',$id)->first();
    }
    
}
