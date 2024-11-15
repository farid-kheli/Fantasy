<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Gameinfo.css') }}">
    
    <title>Document</title>
</head>

<body>
    <form action="{{route('Update.Match.Info', [$club->id, $FixturN])}}" method="POST">
        @csrf
        <main>
            <div class="matche-carde">
                <div class="first">
                    <div class="club">
                        <img class="teamebadge" src="{{$club->FilePathe}}" alt="">
                        <h2>{{$club->ClubName}}</h2>
                    </div>
                    <div class="score">
                        <h2>2</h2>
                        <h3>:</h3>
                        <h2>2</h2>
                    </div>
                    <div class="club">
                        <img class="teamebadge" src="{{$club->FilePathe}}" alt="">
                        <h2>{{$club->ClubName}}</h2>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="biger">
                    <div class="pitche">
                        <div class="info">
                            <img class="teamebadge" src="{{$club->FilePathe}}" alt="">
                            <h2>{{$club->ClubName}}</h2>
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
                                <div id="player1" class="playerP">
                                    +
                                </div>
                            </div>
                            <div class="Line">
                                <div  id="player2" class="playerP">
                                    +
                                </div>
                                <div id="player3" class="playerP">
                                    +
                                </div>
                                <div id="player4" class="playerP">
                                    +
                                </div>
                                <div id="player5" class="playerP">
                                    +
                                </div>
                            </div>
                            <div class="Line">
                                <div id="player6" class="playerP">
                                    +
                                </div>
                                <div id="player7" class="playerP">
                                    +
                                </div>
                                <div id="player8" class="playerP">
                                    +
                                </div>
                            </div>
                            <div class="Line">
                                <div id="player9" class="playerP">
                                    +
                                </div>
                                <div id="player10" class="playerP">
                                    +
                                </div>
                                <div id="player11" class="playerP">
                                    +
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="smaler">
                    <div class="home-list">
                        <div id="player-list" class="player-list">
                            <h2>{{$club->ClubName}}</h2>
                            @foreach ($Players as $Player)
                                <div id="{{$Player->id}}"
                                    onclick="select('{{$Player->Position}}', 10, '{{$Player->Name}}', this.id,'home-team')"
                                    class="player">
                                    <div class="psision">{{$Player->Position}}</div>
                                    <h3>{{$Player->Name}}</h3>
                                    <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                        alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <input type="hidden" name="formation" id="formation" value="4-3-3">
                    <button type="submit">
                        submit
                    </button>
                </div>
            </div>
        </main>
    </form>
</body>
<script src="{{ asset('js/GameInfo.js') }}"></script>
<script>
formation(@json($PlayerList->formaton)[0],@json($PlayerList->formaton)[2],@json($PlayerList->formaton)[4],'home-team')
verify()
function verify(){
    @if ($PlayerList->player1 != null)
        select('{{$PlayerList->GetPlayer($PlayerList->player1)->Position}}', 10, '{{$PlayerList->GetPlayer($PlayerList->player1)->Name}}',{{$PlayerList->GetPlayer($PlayerList->player1)->id}}, 'home-team')
        chang(document.getElementById('player1'))

    @endif

    @if ($PlayerList->player2 != null)
        select('{{$PlayerList->GetPlayer($PlayerList->player2)->Position}}', 10, '{{$PlayerList->GetPlayer($PlayerList->player2)->Name}}',{{$PlayerList->GetPlayer($PlayerList->player2)->id}}, 'home-team')
        chang(document.getElementById('player2'))
    @endif
    @if ($PlayerList->player3 != null)
        select('{{$PlayerList->GetPlayer($PlayerList->player3)->Position}}', 10, '{{$PlayerList->GetPlayer($PlayerList->player3)->Name}}',{{$PlayerList->GetPlayer($PlayerList->player3)->id}}, 'home-team')
        chang(document.getElementById('player3'))

    @endif

    @if ($PlayerList->player4 != null)
        select('{{$PlayerList->GetPlayer($PlayerList->player4)->Position}}', 10, '{{$PlayerList->GetPlayer($PlayerList->player4)->Name}}',{{$PlayerList->GetPlayer($PlayerList->player4)->id}}, 'home-team')
        chang(document.getElementById('player4'))

    @endif

    @if ($PlayerList->player5 != null)
        select('{{$PlayerList->GetPlayer($PlayerList->player5)->Position}}', 10, '{{$PlayerList->GetPlayer($PlayerList->player5)->Name}}',{{$PlayerList->GetPlayer($PlayerList->player5)->id}}, 'home-team')
        chang(document.getElementById('player5'))

    @endif

    @if ($PlayerList->player6 != null)
        select('{{$PlayerList->GetPlayer($PlayerList->player6)->Position}}', 10, '{{$PlayerList->GetPlayer($PlayerList->player6)->Name}}',{{$PlayerList->GetPlayer($PlayerList->player6)->id}}, 'home-team')
        chang(document.getElementById('player6'))

    @endif

    @if ($PlayerList->player7 != null)
        select('{{$PlayerList->GetPlayer($PlayerList->player7)->Position}}', 10, '{{$PlayerList->GetPlayer($PlayerList->player7)->Name}}',{{$PlayerList->GetPlayer($PlayerList->player7)->id}}, 'home-team')
        chang(document.getElementById('player7'))

    @endif

    @if ($PlayerList->player8 != null)
        select('{{$PlayerList->GetPlayer($PlayerList->player8)->Position}}', 10, '{{$PlayerList->GetPlayer($PlayerList->player8)->Name}}',{{$PlayerList->GetPlayer($PlayerList->player8)->id}}, 'home-team')
        chang(document.getElementById('player8'))

    @endif

    @if ($PlayerList->player9 != null)
        select('{{$PlayerList->GetPlayer($PlayerList->player9)->Position}}', 10, '{{$PlayerList->GetPlayer($PlayerList->player9)->Name}}',{{$PlayerList->GetPlayer($PlayerList->player9)->id}}, 'home-team')
        chang(document.getElementById('player9'))

    @endif

    @if ($PlayerList->player10 != null)
        select('{{$PlayerList->GetPlayer($PlayerList->player10)->Position}}', 10, '{{$PlayerList->GetPlayer($PlayerList->player10)->Name}}',{{$PlayerList->GetPlayer($PlayerList->player10)->id}}, 'home-team')
        chang(document.getElementById('player10'))

    @endif
    @if ($PlayerList->player11 != null)
        select('{{$PlayerList->GetPlayer($PlayerList->player11)->Position}}', 10, '{{$PlayerList->GetPlayer($PlayerList->player11)->Name}}',{{$PlayerList->GetPlayer($PlayerList->player11)->id}}, 'home-team')
        chang(document.getElementById('player11'))

    @endif}

    function remove(element,id,pid){
    document.getElementById(id).innerHTML = '+'
    document.getElementById(id).className = 'playerP'
    @foreach ($Players as $Player)
     if({{$Player->id}} == pid){
        document.getElementById('player-list').innerHTML += `
                                <div id="{{$Player->id}}"
                                    onclick="select('{{$Player->Position}}', 10, '{{$Player->Name}}', this.id,'home-team')"
                                    class="player">
                                    <div class="psision">{{$Player->Position}}</div>
                                    <h3>{{$Player->Name}}</h3>
                                    <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                        alt="">
                                </div>`
}       
    @endforeach    
    }
console.log(@json($PlayerList->formaton)[0],@json($PlayerList->formaton)[2],@json($PlayerList->formaton)[4],)


</script>

</html>