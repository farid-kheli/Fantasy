<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MatchController;



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/', function () {
    return view('Homme');
})->name('home');
Route::get('/singup',[ ViewController::class,'singup'])->name('Singup');
Route::POST('/New/User',[ UserController::class,'NewUser'])->name('new.user');
Route::POST('/User/Login',[ UserController::class,'login'])->name('login');
Route::get('/League/Tabule',[ ViewController::class,'LeagueTabul'])->name('League.Tabul');
Route::get('/Matchs',[ ViewController::class,'MAtchesPage'])->name('Match.Page');
Route::get('/Matchs/Players/{by}',[ ViewController::class,'Player'])->name('Players.Page');
Route::get('/Matchs/Plane/Week/{number}',[ ViewController::class,'PlanWeek'])->name('League.Plan');
Route::get('/Fantasie/Team/{ID}',[ ViewController::class,'FantasieClub'])->name('Fantasie.Club');
Route::get('/Admin/Matches',[ AdminController::class,'AdminMatches'])->name('Admin.Matches');
Route::get('/Admin/Clubs',[ AdminController::class,'AdminClubs'])->name('Admin.Clubs');
Route::get('/Admin/Creat/Player',[ AdminController::class,'AdminCreatePlayer'])->name('Admin.Create.Player');
Route::post('/Admin/Creat/club',[AdminController::class,'Createclub'])->name('Create.club');
Route::post('/Admin/Creat/Player',[ AdminController::class,'CreatePlayer'])->name('Create.Player');
Route::post('/Admin/Creat/Match',[ AdminController::class,'CreateMatch'])->name('Create.Match');
Route::post('/Admin/Update/{Match}',[ MatchController::class,'UpdateMatch'])->name('Update.Match');
Route::post('/Admin/Update/{Match}/{Info}',[ MatchController::class,'UpdatInfo'])->name('Update.Match.Info');
Route::get('/Admin/Creat/club',[ AdminController::class,'AdminCreateClub'])->name('Admin.Create.Club');
Route::get('/Admin/Game/detail/{MatcheID}',[ AdminController::class,'GameCarde'])->name('Game.Carde');
Route::get('/Admin/Clubs/{club}',[ AdminController::class,'AdminClubsManage'])->name('Admin.Clubs.Manage');
Route::get('/Admin/add/{player}/to/{club}',[ AdminController::class,'addplayertoclub'])->name('Admin.add.playyer');
Route::get('/Admin/Player/Profiel/{Player}',[ PlayerController::class,'AdminPlayerProfiel'])->name('Player.Profiel.Admin');
Route::get('/Admin/Fixture/',[ AdminController::class,'Fixtur'])->name('Fixtur.Admin');
Route::get('/Admin/Save/Fixture',[ AdminController::class,'SaveFixturInfo'])->name('Save.Fixtur.Info');
Route::get('/Player/Profiel/{Player}',[ PlayerController::class,'PlayerProfiel'])->name('Player.Profiel');
