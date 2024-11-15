<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Fantasy</title>
    <link rel="stylesheet" href="{{ asset('css/Fantasie.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:300,400,700" />

</head>

<body>
    <header>
        <nav>
            <div class="MainNav">
                <title>TITLE</title>
            </div>
        </nav>
        <ul>
            
        <a href="{{route('home')}}">
            <li><img src="https://www.freeiconspng.com/thumbs/house-png/home-house-silhouette-icon-building--public-domain-pictures--20.png"
                    alt=""></li>
        </a>
        <a href="{{route('League.Tabul')}}">
            <li><img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/league-table-4294018-3561200.png?f=webp"
                    alt="">
            </li>
        </a>
        <a href="{{route('Match.Page')}}">
            <li><img src="https://cdn-icons-png.flaticon.com/512/53/53254.png" alt=""></li>
        </a>
        <li class="active"><img src="https://www.pngall.com/wp-content/uploads/5/Vector-Game-Controller.png" alt="">
        </li>
        <li><img src="https://static.thenounproject.com/png/716657-200.png" alt=""></li>
        </ul>
        
        
    </header>
    <div class="container">
        <section id="players" class="players">
            <h2>Choose Your Players</h2>
            <div id="MyPlayers" class="player-list">
                @foreach ($Owned as $Own)
                    <a href="{{route('Player.Profiel.Owned', [$User, $Own->getPlayer($Own->Player)->id, 1])}}"
                        id="{{$Own->getPlayer($Own->Player)->Position}}" class="pl-bay">
                        <div id="{{$Own->Points($Own->Player)->TOTALPOINTS}}" class="bay-situation">
                            <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                                alt="">
                        </div>
                        <div class="bay-team">
                            <img src="{{$Own->getPlayer($Own->Player)->Pictur}}" alt="">
                        </div>
                        <div id="{{$Own->getPlayer($Own->Player)->id}}" class="bay-name">
                            {{$Own->getPlayer($Own->Player)->Name}}
                        </div>
                        <h2>{{$Own->getPlayer($Own->Player)->Price}}£</h2>
                        <h2>{{$Own->getPlayer($Own->Player)->Points}}</h2>
                    </a>
                @endforeach
            </div>
        </section>
        @yield('Main')
        <section class="Mylis">
            <div class="serche-pnel">
                <h1>Player Selection</h1>
                <p>View</p>
                <form style="display:flex;   justify-content: space-between;" action="">
                    <label>
                        <input type="radio" id="html" name="radio" checked />
                        <span>ALL</span>
                    </label>
                    <label>
                        <input type="radio" id="css" name="radio" />
                        <span>STR</span>
                    </label>
                    <label>
                        <input type="radio" id="javascript" name="radio" />
                        <span>MID</span>
                    </label>
                    <label>
                        <input type="radio" id="javascript" name="radio" />
                        <span>DEF</span>
                    </label>
                    <label>
                        <input type="radio" id="javascript" name="radio" />
                        <span>GOL</span>
                    </label>
                </form>
                <p>sorted by :</p>
                <form style="display:flex;   justify-content: space-between;" action="">
                    <label>
                        <input type="radio" id="html" name="radio" />
                        <span>Name</span>
                    </label>
                    <label>
                        <input type="radio" id="css" name="radio" checked />
                        <span>Price</span>
                    </label>
                    <label>
                        <input type="radio" id="javascript" name="radio" />
                        <span>Point</span>
                    </label>
                </form>
                <input class="max" type="number" placeholder="max cost" id="">
                <input class="max" type="text" name="" placeholder="serch player" id="">
                <button>Serche</button>
            </div>
            <h2>Choose Your Players</h2>
            <div class="player-list">
                @foreach ($Players as $Player)
                    <a href="{{route('Player.Profiel', [$User, $Player->id, 7])}}" class="pl-bay">
                        <div class="bay-situation">
                            <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                                alt="">
                        </div>
                        <div class="bay-team">
                            <img src="{{$Player->Pictur}}" alt="">
                        </div>
                        <div class="bay-name">{{$Player->Name}} </div>
                        <h2>{{$Player->Price}}£</h2>
                        <h2>{{$Player->Points}}</h2>
                    </a>
                @endforeach

            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Football Fantasy League</p>
    </footer>
</body>

<script src="{{ asset('js\Fantasie.js') }}"></script>
<script>
    formation({{$Team->Formation[0]}},{{$Team->Formation[2]}},{{$Team->Formation[4]}})
</script>

</html>