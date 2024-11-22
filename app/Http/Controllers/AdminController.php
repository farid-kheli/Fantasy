<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Club;
use Illuminate\Support\Str;
use App\Models\Player;
use App\Models\Matche;
use App\Models\Playepoint;
use App\Models\Fixtur;
use App\Models\Userteam;
use App\Models\Fixturteam;
use App\Models\Fantasieuserxi;
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
    public function StartFixtur($number)
    {
        $UserID=1;
            
            $m = Userteam::where('User',$UserID)->first();
            if($m){
            Fantasieuserxi::create([
                'User'=>$UserID,
                'FixturN'=>$number,
                'Player1'=>$m->Player1,
                'Player2'=>$m->Player2,
                'Player3'=>$m->Player3,
                'Player4'=>$m->Player4,
                'Player5'=>$m->Player5,
                'Player6'=>$m->Player6,
                'Player7'=>$m->Player7,
                'Player8'=>$m->Player8,
                'Player9'=>$m->Player9,
                'Player10'=>$m->Player10,
                'Player11'=>$m->Player11,
                'Formation'=>$m->Formation,
            ]);
        }else{
            Userteam::create([
                'User'=>$UserID,
                'FixturN'=>$number,
                'Player1'=>null,
                'Player2'=>null,
                'Player3'=>null,
                'Player4'=>null,
                'Player5'=>null,
                'Player6'=>null,
                'Player7'=>null,
                'Player8'=>null,
                'Player9'=>null,
                'Player10'=>null,
                'Player11'=>null,
            ]);
        }
            return to_route('Fixtur.Admin');
    }
    public function AdminClubs()
    {
        $clubs=Club::all();
        return view('Clubs',['clubs'=>$clubs]);
    }
    public function SaveFixturInfo()
    {
        $n=Fixtur::create([
            'team0'=>request()->team0,
            'team1'=>request()->team1,
            'team2'=>request()->team2,
            'team3'=>request()->team3,
            'team4'=>request()->team4,
            'team5'=>request()->team5,
            'team6'=>request()->team6,
            'team7'=>request()->team7,
            'datendtime'=>request()->datetime,
        ]);
            Fixturteam::create([
                'TeamID'=>request()->team0,
                'FixturN'=>$n->id
            ]);
            Fixturteam::create([
                'TeamID'=>request()->team1,
                'FixturN'=>$n->id
            ]);
            Fixturteam::create([
                'TeamID'=>request()->team2,
                'FixturN'=>$n->id
            ]);
            Fixturteam::create([
                'TeamID'=>request()->team3,
                'FixturN'=>$n->id
            ]);
            Fixturteam::create([
                'TeamID'=>request()->team4,
                'FixturN'=>$n->id
            ]);
            Fixturteam::create([
                'TeamID'=>request()->team5,
                'FixturN'=>$n->id
            ]);
            Fixturteam::create([
                'TeamID'=>request()->team6,
                'FixturN'=>$n->id
            ]);
            Fixturteam::create([
                'TeamID'=>request()->team7,
                'FixturN'=>$n->id
            ]);
            for($i=0;$i<8;$i++){
                switch ($i) {
                    case 0:
                        $Club=$n->team0;
                        break;
                    case 1:
                        $Club=$n->team1;
                        break;
                    case 2:
                        $Club=$n->team2;
                        break;
                    case 3:
                        $Club=$n->team3;
                        break;
                    case 4:
                        $Club=$n->team4;
                        break;
                    case 5:
                        $Club=$n->team5;
                        break;
                    case 6:
                        $Club=$n->team6;
                        break;
                    case 7:
                        $Club=$n->team7;
                        break;
                }
                
            $Clubname=Club::where('id',$Club)->first();
            $players=Player::where('Club',$Clubname->ClubName)->get();
            foreach ($players as $player) {
                Playepoint::create([
                    'PlayerID'=>$player->id,
                    'FixtureN'=>$n->id,
                ]);
            }}
            for($i=1;$i<=4;$i++){
                $k=$i*2-1;
                $m=$i*2;
                switch ($k) {
                    case 1:
                        $Club=$n->team0;
                        break;
                    case 3:
                        $Club=$n->team2;
                        break;
                    case 5:
                        $Club=$n->team4;
                        break;
                    case 7:
                        $Club=$n->team6;
                        break;
                }
                switch ($m) {
                    case 2:
                        $Club2=$n->team1;
                        break;
                    case 4:
                        $Club2=$n->team3;
                        break;
                    case 6:
                        $Club2=$n->team5;
                        break;
                    case 8:
                        $Club2=$n->team7;
                        break;
                }
                Matche::create([
                'Home'=>$Club,
                'Away'=>$Club2,
                'FixturN'=>$n->id,
                'GoalHome'=>0,
                'GoalAway'=>0,
            ]);
            }
            
        return to_route('Fixtur.Admin');
    }
    public function Fixtur()
    {
        $FixturN=Fixtur::latest()->first();
        if($FixturN!=null){
        $FixturN=$FixturN->id + 1;
    }else{
        $FixturN = 1;
    }
        $Fixturs = Fixtur::orderBy('datendtime', 'asc')->get();
        $clubs=Club::all();
        $Matches=Matche::all();
        return view('Fixture',['clubs'=>$clubs,'Matches'=>$Matches,'FixturN'=>$FixturN,'Fixturs'=>$Fixturs]);
    }
    public function GameCarde($Team,$FixturN)
    {
        //$match=Matche::where('id',$FixturN)->first();
        $club = Club::where('id',$Team)->first();
        //$HomePlayers = Player::where( 'Club',$match->Home)->get();
        //$AwayPlayers = Player::where('Club',$match->Away)->get();
        //$Info = Fixturteam::where('matcheID',$FixturN)->first();
        $Players=Player::where('Club',$club->ClubName)->get();
        $PlayerList = Fixturteam::where('FixturN',$FixturN)->where('TeamID',$Team)->first();
        return view('Gameinfo',['club'=>$club,'FixturN'=>$FixturN,'Players'=>$Players,'PlayerList'=>$PlayerList]);//,['match'=>$match,'HomePlayers'=>$HomePlayers,'Info'=>$Info,'AwayPlayers'=>$AwayPlayers]);
    }
    public function AdminClubsManage($club)
    {
        $club=Club::where('id',$club)->first();
        $plyerin=Player::where('Club',$club->id)->get();
        $Players = Player::where('Club', null)->get();
        return view('ClubProfile', ['plyerins' => $plyerin,'Players' => $Players,'club'=>$club]);
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
            'situation_id' => 1,
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
        $Team=Fixturteam::create([
            'matcheID'=>$id->id
        ]);
        return to_route('Admin.Matches')->with('succece', 'you have created a new match ');
    }
}
