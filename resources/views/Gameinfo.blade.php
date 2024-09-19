<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Gameinfo.css') }}">
    <title>Document</title>
</head>

<body>
    <form action="{{route('Update.Match.Info',[$Info->matcheID,$Info->id])}}" method="POST">
        @csrf
        <main>
            <div class="matche-carde">
                <div class="first">
                    <div class="club">
                        <img class="teamebadge" src="{{$match->getTeam($match->Home)->FilePathe}}" alt="">
                        <h2>{{$match->getTeam($match->Home)->ClubName}}</h2>
                    </div>
                    <div class="score">
                        <h2>{{$Info->HomeScoor}}</h2>
                        <h3>:</h3>
                        <h2>{{$Info->AwayScoor}}</h2>
                    </div>
                    <div class="club">
                        <img class="teamebadge" src="{{$match->getTeam($match->Away)->FilePathe}}" alt="">
                        <h2>{{$match->getTeam($match->Away)->ClubName}}</h2>
                    </div>
                </div>

                <div class="players-scoore">
                    <div class="home-player">
                        <h3>luis diase 35'</h3>
                        <h3>Ruben diase 35'</h3>
                    </div>
                    <button>Goal</button>
                    <div class="away-player">
                        <h3>luis diase 25'</h3>

                    </div>
                </div>

                <ul class="scend">

                    <li>
                        <h2>{{$Info->HomeScoor}}</h2>goles <h2>{{$Info->AwayScoor}}</h2>
                    </li>
                    <li>
                        <input type="number" name="HomePosition" value="{{$Info->HomePosition}}">psition(%)<input type="number"
                           name="AwayPosition" value="{{$Info->AwayPosition}}">
                    </li>
                    <li>
                        <input type="number" name="HomeShoot" value="{{$Info->HomeShoot}}">shoots<input name="AwayShoot" value="{{$Info->AwayShoot}}"
                            type="number">
                    </li>
                    <li>
                        <input type="number" name="HomeOnterget" value="{{$Info->HomeOnterget}}">shoots on taget<input type="number"
                          name="AwayOnterget" value="{{$Info->AwayOnterget}}">
                    </li>
                    <li>
                        <input type="number" name="homeFowls" value="{{$Info->homeFowls}}">Fouls<input type="number"
                          name="AwayFowls"  value="{{$Info->AwayFowls}}">
                    </li>
                    <li>
                        <input type="number" name="homeYelow"  value="{{$Info->homeYelow}}">Yelow Carde<input type="number"
                        name="AwayYelow"  value="{{$Info->AwayYelow}}">
                    </li>
                    <li>
                        <input type="number" name="homeRed" value="{{$Info->homeRed}}">Red Cared<input type="number"
                           name="AwayRed" value="{{$Info->AwayRed}}">
                    </li>
                    <li>
                        <input type="number" name="homecorners" value="{{$Info->homecorners}}">Corners<input type="number"
                          name="Awaycorners"  value="{{$Info->Awaycorners}}">
                    </li>
                    <li>
                        <input type="number" name="homeoffsieds" value="{{$Info->homeoffsieds}}">Offside<input type="number"
                           name="Awayoffsieds" value="{{$Info->Awayoffsieds}}">
                    </li>
                </ul>
            </div>
            <div class="main">
                <div class="biger">
                    <div class="pitche">
                        <div class="info">

                            <img class="teamebadge" src="{{$match->getTeam($match->Home)->FilePathe}}" alt="">
                            <h2>{{$match->getTeam($match->Home)->ClubName}}</h2>
                            <div class="sec-center">
                                <!-- First Dropdown -->
                                <input class="dropdown" type="checkbox" id="dropdown1" name="dropdown1" />
                                <label class="for-dropdown" for="dropdown1">4-3-3<i
                                        class="uil uil-arrow-down"></i></label>
                                <div class="section-dropdown">
                                    <a href="#" onclick="formation(5,4,1,'home-team')"
                                        class="uil uil-arrow-right"><i>5-4-1</i></a>
                                    <a href="#" onclick="formation(4,5,1,'home-team')"
                                        class="uil uil-arrow-right"><i>4-5-1</i></a>
                                    <a href="#" onclick="formation(3,5,2,'home-team')"
                                        class="uil uil-arrow-right"><i>3-5-2</i></a>
                                    <a href="#" onclick="formation(3,4,3,'home-team')"
                                        class="uil uil-arrow-right"><i>3-4-3</i></a>
                                    <a href="#" onclick="formation(3,5,2,'home-team')"
                                        class="uil uil-arrow-right"><i>3-5-2</i></a>
                                    <a href="#" onclick="formation(5,3,2,'home-team')"
                                        class="uil uil-arrow-right"><i>5-3-2</i></a>
                                    <a href="#" onclick="formation(4,3,3,'home-team')"
                                        class="uil uil-arrow-right"><i>4-3-3</i></a>
                                </div>
                            </div>
                        </div>
                        <div id="home-team" class="home-team">
                            <div class="Line">
                                <div id="GOL" class="void">
                                    +
                                </div>
                            </div>
                            <div class="Line">
                                <div id="DEF" class="void">
                                    +
                                </div>
                                <div id="DEF" class="void">
                                    +
                                </div>
                                <div id="DEF" class="void">
                                    +
                                </div>
                                <div id="DEF" class="void">
                                    +
                                </div>
                            </div>
                            <div class="Line">
                                <div id="MID" class="void">
                                    +
                                </div>
                                <div id="MID" class="void">
                                    +
                                </div>
                                <div id="MID" class="void">
                                    +
                                </div>
                            </div>
                            <div class="Line">
                                <div  id="STR"  class="void">
                                    +
                                </div>
                                <div id="STR"  class="void">
                                    +
                                </div>
                                <div id="STR"  class="void">
                                    +
                                </div>
                            </div>
                        </div>
                        <div class="away-team">
                            <div class="Line">
                                <div id="STR" class="void">
                                    +
                                </div>
                                <div id="STR" class="void">
                                    +
                                </div>
                                <div id="STR" class="void">
                                    +
                                </div>
                            </div>
                            <div class="Line">
                                <div id="MID" class="void">
                                    +
                                </div>
                                <div id="MID" class="void">
                                    +
                                </div>
                                <div id="MID" class="void">
                                    +
                                </div>
                            </div>
                            <div class="Line">
                                <div id="DEF" class="void">
                                    +
                                </div>
                                <div id="DEF" class="void">
                                    +
                                </div>
                                <div id="DEF" class="void">
                                    +
                                </div>
                                <div id="DEF" class="void">
                                    +
                                </div>
                            </div>
                            <div class="Line">
                                <div id="GOL" class="void">
                                    +
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <img class="teamebadge" src="{{$match->getTeam($match->Away)->FilePathe}}" alt="">
                            <h2>{{$match->getTeam($match->Away)->ClubName}}</h2>
                            <div class="sec-center">
                                <!-- Second Dropdown -->
                                <input class="dropdown" type="checkbox" id="dropdown2" name="dropdown2" />
                                <label class="for-dropdown" for="dropdown2">4-4-2<i
                                        class="uil uil-arrow-down"></i></label>
                                <div class="section-dropdown">
                                    <a href="#" onclick="formation(4,3,3,'away-team')">4-4-2<i
                                            class="uil uil-arrow-right"></i></a>
                                    <a href="#" onclick="formation(5,3,2,'away-team')">5-3-2<i
                                            class="uil uil-arrow-right"></i></a>
                                    <a href="#" onclick="formation(4,5,1,'away-team')">4-5-1<i
                                            class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="smaler">
                    <div class="home-list">
                        <div id="player-list" class="player-list">
                            <h2>{{$match->getTeam($match->Home)->ClubName}}</h2>
                            @foreach ($HomePlayers as $HomePlayer)
                                <div id="{{$HomePlayer->id}}"
                                    onclick="select('{{$HomePlayer->Position}}', 10, '{{$HomePlayer->Name}}', this.id,'home-team')"
                                    class="player">
                                    <div class="psision">{{$HomePlayer->Position}}</div>
                                    <h3>{{$HomePlayer->Name}}</h3>
                                    <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                        alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="away-list">
                        <div class="player-list">
                            <h2>{{$match->getTeam($match->Away)->ClubName}}</h2>
                            @foreach ($AwayPlayers as $AwayPlayer)
                                <div id="{{$AwayPlayer->id}}"
                                    onclick="select('{{$AwayPlayer->Position}}', 10, '{{$AwayPlayer->Name}}', this.id,'away-team')"
                                    class="player">
                                    <div class="psision">{{$AwayPlayer->Position}}</div>
                                    <h3>{{$AwayPlayer->Name}}</h3>
                                    <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                        alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="submit">
                        submit
                    </button>
                </div>

            </div>
        </main>
    </form>
</body>
<script src="{{ asset('js/GameInfo.js') }}"></script>

</html>