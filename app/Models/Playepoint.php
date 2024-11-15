<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playepoint extends Model
{
    use HasFactory;
    protected $fillable = [
        'PlayerID',
        'FixtureN',
        'MatchePlayed',
        'Goals',
        'GoalAssists',
        'BigChanceCreated',
        'BallsIntoTheBox',
        'PinaltiesSaved',
        'Saves',
        'EffectiveClearances',
        'PenaltiesMissed',
        'OwnGoals',
        'YellowCard',
        'RedCard',
        'EffectiveDribbles',
        'Recoveries',
        'LostBalls',
        'AddisionallPoints',
        'TOTALPOINTS',
    ];
}
