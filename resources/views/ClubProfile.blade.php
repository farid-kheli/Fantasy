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
                    <img src="https://static.wixstatic.com/media/d4cce1_e5278942475b419390a11d15cc603e12~mv2.png/v1/fill/w_264,h_259,al_c,lg_1,q_85,enc_auto/GnT.png"
                        alt="">
                </div>
                <div class="info">
                    <h1 class="titel">Girth N Turf </h1>
                </div>
            </div>
            <div class="rbody">
                <div class="players-list">
                    @foreach ($Players as $player)
                        <div class="player">
                            <h4>{{ $player->FirstName }} {{ $player->LastName }}</h4> <a style="text-decoration: none; color:white"
                                href="{{ route('Admin.add.playyer', [$player->id, 1]) }}">Add Player</a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="left">
            <div class="players">
                <div class="player-carde">
                    <div class="pctur">
                        <a href="{{ route('Player.Profiel', 1) }}"><img class="player-img"
                                src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                alt=""></a>
                        <img class="club-img"
                            src="https://static.wixstatic.com/media/d4cce1_e5278942475b419390a11d15cc603e12~mv2.png/v1/fill/w_264,h_259,al_c,lg_1,q_85,enc_auto/GnT.png"
                            alt="">
                    </div>
                    <div class="card-body">
                        <div class="first">
                            <div class="first11">
                                <p class="posinsion" style="background: rgb(0, 135, 139);">
                                    STR
                                </p>
                                <h2 class="name">Player First</h2>
                            </div>
                            <div class="first12">
                                <h3 class="fsyp">FSYP</h3>
                                <h1 class="points">133</h1>
                            </div>
                        </div>
                        <div class="secend">
                            <div class="situation">
                                <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                                    class="icon">
                                <div class="sit">Avalibule</div>
                            </div>
                            <div class="average">
                                <h4 class="fsyp2">Avreage</h4>
                                <h2 class="points">6.35</h2>
                            </div>
                        </div>
                        <div class="third">
                            <h1 class="price">12,000£</h1>
                            <div class="actin">
                                <button class="rlees">Release</button>
                                <button class="chang">Change</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
