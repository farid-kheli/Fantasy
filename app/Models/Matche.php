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
        'EndTime',
        'firstHome',
        'firstAway',
        'secendHome',
        'secendAway',
        'thirdeHome',
        'thirdeAway',
    ];
    public function getTeam($name){
        return Club::where('ClubName',$name)->first();
    }
}
