<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Club;
use Illuminate\Support\Str;
use App\Models\Player;
use App\Models\Matche;
use App\Models\Matcheteams;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function AdminMatches()
    {
        $clubs = Club::all();
        $live = Matche::where('Time', '<=', Carbon::now())
            ->where('EndTime', '>=', Carbon::now())->get();
        //dd(Carbon::now());
        $Paset = Matche::where('EndTime', '<=', Carbon::now())->get();
        $comings = Matche::where('EndTime', '>=', Carbon::now())->get();
        $time=Carbon::now();
        
        return view('Matches', ['time'=>$time,'clubs' => $clubs, 'liveMatches' => $live,'comings' => $comings, 'Pasets' => $Paset]);
    }
    public function AdminClubs()
    {
        return view('Clubs');
    }
    public function SaveFixturInfo()
    {
        return 'hello';
    }
    public function Fixtur()
    {
        return view('Fixture');
    }
    public function GameCarde($MatcheID)
    {
        $match=Matche::where('id',$MatcheID)->first();
        $HomePlayers= Player::where('Club',$match->Home)->get();
        $AwayPlayers= Player::where('Club',$match->Away)->get();
        $Info = Matcheteams::where('matcheID',$MatcheID)->first();
        return view('Gameinfo',['match'=>$match,'HomePlayers'=>$HomePlayers,'Info'=>$Info,'AwayPlayers'=>$AwayPlayers]);
    }
    public function AdminClubsManage()
    {
        $Players = Player::where('Club', null)->get();
        return view('ClubProfile', ['Players' => $Players]);
    }
    public function AdminCreatePlayer()
    {
        $clubs = Club::all();
        return view('CreatePlayer', ['clubs' => $clubs]);
    }
    public function AdminCreateClub()
    {
        return view('CreateClub');
    }
    public function Createclub()
    {
        $targetDirectory = public_path('img');
        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }
        $fileName = Str::random(20) . '.webp';
        $path = request()->file('file')->move(public_path('files'), $fileName);
        $path = '\files' . '\\' . $fileName;
        Club::create([
            'ClubName' => request()->ClubName,
            'FilePathe' => $path,
        ]);
        return to_route('Admin.Create.Club')->with('succece', 'you have created a new club ');
    }
    public function addplayertoclub(Player $player, Club $club)
    {
        $player->update([
            'Club' => $club->ClubName,
        ]);

        return to_route('Admin.Clubs.Manage', 1)->with('succece', 'you have add a new player to this club ');
    }
    public function CreatePlayer()
    {
        $fileName = Str::random(20) . '.webp';
        $path = request()->file('file')->move(public_path('files'), $fileName);
        $path = '\files' . '\\' . $fileName;
        $name = request()->Name;
        Player::create([
            'Name' => $name,
            'Price' => request()->price,
            'Club' => request()->club,
            'Position' => request()->position,
            'Pictur' => $path,
            'Points' => 0,
            'Avrege' => 0,
        ]);
        return to_route('Create.Player')->with('succece', 'you have created a new club ');
    }
    public function CreateMatch()
    {
    $id=Matche::create([
            'Home' => request()->home,
            'Away' => request()->away,
            'Time' => request()->time,
            'EndTime' => Carbon::parse(request()->time)->addMinutes(15),
            'firstHome' => 0,
            'firstAway' => 0,
            'secendHome' => 0,
            'secendAway' => 0,
            'thirdeHome' => 0,
            'thirdeAway' => 0,
        ]);
        $Team=Matcheteams::create([
            'matcheID'=>$id->id
        ]);
        return to_route('Admin.Matches')->with('succece', 'you have created a new match ');
    }
}
