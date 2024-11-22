<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/ClubProfile.css') }}">

    <title>Document</title>
</head>

<body>
    @if (session('succece'))
        <div class="alert alert-success" role="alert">
            {{ session('succece') }}
        </div>
    @endif
    <div class="conainer">
        <div class="rghit">
            <div class="rheade">
                <div class="badg">
                    <img src="{{$club->FilePathe}}" alt="">
                </div>
                <div class="info">
                    <h1 class="titel">{{$club->ClubName}} </h1>
                </div>
            </div>
            <div class="rbody">
                <div class="players-list">
                    @foreach ($Players as $player)
                        <div class="player">
                            <h4>{{ $player->FirstName }} {{ $player->LastName }}</h4> <a
                                style="text-decoration: none; color:white"
                                href="{{ route('Admin.add.playyer', [$player->id, 1]) }}">Add Player</a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="left">
            <div class="players">
                @foreach ($plyerins as $plyerin)
                        <div class="player-carde">
                            <div class="pctur">
                                <a href="{{ route('Player.Profiel.Admin', [$plyerin->Pictur, 1]) }}"><img class="player-img"
                                        src="{{$plyerin->Pictur}}" alt=""></a>
                                <img class="club-img" src="{{$plyerin->getTeam($plyerin->Club)->FilePathe}}" alt="">
                            </div>
                            <div class="card-body">
                                <div class="first">
                                    <div class="first11">
                                        <p class="posinsion" style="background: rgb(0, 135, 139);">
                                            @if ($Player->Position == 'GOL')
                                                <h6 class="p-2" style="background: #b32d04;">
                                                    GOL
                                                </h6>
                                            @endif
                                        @if ($Player->Position == 'DEF')
                                            <h6 class="p-2" style="background: #7e0073">
                                                DEF
                                            </h6>
                                        @endif
                                        @if ($Player->Position == 'MID')
                                            <h6 class="p-2" style="background: #00a000">
                                                MID
                                            </h6>
                                        @endif
                                        @if ($Player->Position == 'STR')
                                            <h6 class="p-2" style="background: rgb(0, 135, 139);">
                                                STR
                                            </h6>
                                        @endif
                                        </p>
                                        <h2 class="name">{{$plyerin->Name}}</h2>
                                    </div>
                                    <div class="first12">
                                        <h3 class="fsyp">FSYP</h3>
                                        <h1 class="points">{{$plyerin->Points}}</h1>
                                    </div>
                                </div>
                                <div class="secend">
                                    <div class="situation">
                                        <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                                            class="icon">
                                        <div class="sit">
                                            <div class="d-flex gap-4">
                                                @if ($Player->situation_id == 1)
                                                    Avariabel
                                                @elseif ($Player->situation_id == 2)
                                                    Injured
                                                @elseif  ($Player->situation_id == 3)
                                                    Questionable
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="average">
                                    <h4 class="fsyp2">Avreage</h4>
                                    <h2 class="points">{{$plyerin->Avrege}}</h2>
                                </div>
                            </div>
                            <div class="third">
                                <h1 class="price">{{$plyerin->Price}}£</h1>
                                <div class="actin">
                                    <button class="rlees">Release</button>
                                    <button class="chang">Change</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    </div>
</body>

</html>