<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixtur extends Model
{
    use HasFactory;
    protected $fillable = [
        'team0',
        'team1',
        'team2',
        'team3',
        'team4',
        'team5',
        'team6',
        'team7',
        'team8',
        'team9',
        'team10',
        'team11',
        'team12',
        'team13',
        'team14',
        'datendtime',
    ];
    function club($id){
        return Club::where('id',$id)->first();
    }
    

}
