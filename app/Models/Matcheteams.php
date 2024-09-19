<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matcheteams extends Model
{
    use HasFactory;
    protected $fillable = [
        'matcheID',
        'Home1',
        'Home2',
        'Home3',
        'Home4',
        'Home5',
        'Home6',
        'Home7',
        'Home8',
        'Home9',
        'Home10',
        'Home11',
        'Homeformaton',
        'Away1',
        'Away2',
        'Away3',
        'Away4',
        'Away5',
        'Away6',
        'Away7',
        'Away8',
        'Away9',
        'Away10',
        'Away11',
        'Awayformaton',
        'HomeScoor',
        'AwayScoor',
        'HomePosition',
        'AwayPosition',
        'HomeShoot',
        'AwayShoot',
        'HomeOnterget',
        'AwayOnterget',
        'homeFowls',
        'AwayFowls',
        'homeYelow',
        'AwayYelow',
        'homeRed',
        'AwayRed',
        'homecorners',
        'Awaycorners',
        'homeoffsieds',
        'Awayoffsieds',
    ];
}
