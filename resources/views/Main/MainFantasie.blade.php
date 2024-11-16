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
                        <input onclick="sort('ALL')" type="radio" id="html" name="radio" checked />
                        <span>ALL</span>
                    </label>
                    <label>
                        <input onclick="sort('STR')" type="radio" id="css" name="radio" />
                        <span>STR</span>
                    </label>
                    <label>
                        <input onclick="sort('MID')" type="radio" id="javascript" name="radio" />
                        <span>MID</span>
                    </label>
                    <label>
                        <input onclick="sort('DEF')" type="radio" id="javascript" name="radio" />
                        <span>DEF</span>
                    </label>
                    <label>
                        <input onclick="sort('GOL')" type="radio" id="javascript" name="radio" />
                        <span>GOL</span>
                    </label>
                </form>
                <p>sorted by :</p>
                <form style="display:flex;   justify-content: space-between;" action="">
                    <label>
                        <input onclick="sortPlayersBy('Name')" type="radio" id="html" name="radio" />
                        <span>Name</span>
                    </label>
                    <label>
                        <input onclick="sortPlayersBy('Price')" type="radio" id="css" name="radio" checked />
                        <span>Price</span>
                    </label>
                    <label>
                        <input onclick="sortPlayersBy('Points')" type="radio" id="javascript" name="radio" />
                        <span>Point</span>
                    </label>
                </form>
                <input onkeyup="getPlayersByMaxPrice()" class="max" type="number" placeholder="max cost" id="maxPrice">
                <input onkeyup="getPlayersByName(this.value)" class="max" type="text" name="" placeholder="serch player" id="">
            </div>
            <h2>Choose Your Players</h2>
            <div class="player-list" id="player-list">
                @foreach ($Players as $Player)
                    <a href="{{route('Player.Profiel', [$User, $Player->id, 7])}}" class="pl-bay">
                        <div class="bay-situation">
                            <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                                alt="">
                        </div>
                        <div class="bay-team">
                            <img src='{{ str_replace('\\', '/', $Player->Pictur) }}' alt="">
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

    player = @json($Players);

    function sortPlayersBy(property) {
        player.sort((a, b) => {
            if (typeof a[property] === "string" && typeof b[property] === "string") {
                return a[property].localeCompare(b[property]);
            }
            return a[property] - b[property];
        });
        element = document.getElementById('player-list')
        element.innerHTML = "";
        for (let index = 0; index < player.length; index++) {

            element.innerHTML += `  <a href="{{route('Player.Profiel', [$User, $Player->id, 7])}}" class="pl-bay">
                        <div class="bay-situation">
                            <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                                alt="">
                        </div>
                        <div class="bay-team">
                            <img src="${player[index].Pictur}" alt="">
                        </div>
                        <div class="bay-name">${player[index].Name} </div>
                        <h2>${player[index].Price}£</h2>
                        <h2>${player[index].Points}</h2>
                    </a>
                    `
        }
    }
    function getPlayersByMaxPrice() {
        maxPrice = Number(document.getElementById('maxPrice').value)
        player = @json($Players);
        player = player.filter(player => player.Price <= maxPrice);
        element = document.getElementById('player-list')
        element.innerHTML = "";
        for (let index = 0; index < player.length; index++) {

            element.innerHTML += `  <a href="{{route('Player.Profiel', [$User, $Player->id, 7])}}" class="pl-bay">
                        <div class="bay-situation">
                            <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                                alt="">
                        </div>
                        <div class="bay-team">
                            <img src="${player[index].Pictur}" alt="">
                        </div>
                        <div class="bay-name">${player[index].Name} </div>
                        <h2>${player[index].Price}£</h2>
                        <h2>${player[index].Points}</h2>
                    </a>
                    `
        }
    }
    function getPlayersByName(V) {
        player = @json($Players);
        player = player.filter(player => player.Name.includes(V));
        element = document.getElementById('player-list')
        element.innerHTML = "";
        for (let index = 0; index < player.length; index++) {

            element.innerHTML += `  <a href="{{route('Player.Profiel', [$User, $Player->id, 7])}}" class="pl-bay">
                        <div class="bay-situation">
                            <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                                alt="">
                        </div>
                        <div class="bay-team">
                            <img src="${player[index].Pictur}" alt="">
                        </div>
                        <div class="bay-name">${player[index].Name} </div>
                        <h2>${player[index].Price}£</h2>
                        <h2>${player[index].Points}</h2>
                    </a>
                    `
        }
    }

    function sort(by) {
        element = document.getElementById('player-list')
        console.log(element, by)
        if (by == 'ALL') {
            element.innerHTML = ` 
            @foreach ($Players as $Player)
                <a href="{{route('Player.Profiel', [$User, $Player->id, 7])}}" class="pl-bay">
                    <div class="bay-situation">
                        <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                            alt="">
                    </div>
                    <div class="bay-team">
                        <img src='{{ str_replace('\\', '/', $Player->Pictur) }}' alt="">
                    </div>
                    <div class="bay-name">{{$Player->Name}} </div>
                    <h2>{{$Player->Price}}£</h2>
                    <h2>{{$Player->Points}}</h2>
                </a>
            @endforeach
                `
        } else {
            element.innerHTML = "";
            for (let index = 0; index < player.length; index++) {
                if (player[index].Position == by) {
                    element.innerHTML += `  <a href="{{route('Player.Profiel', [$User, $Player->id, 7])}}" class="pl-bay">
                        <div class="bay-situation">
                            <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                                alt="">
                        </div>
                        <div class="bay-team">
                            <img src="${player[index].Pictur}" alt="">
                        </div>
                        <div class="bay-name">${player[index].Name} </div>
                        <h2>${player[index].Price}£</h2>
                        <h2>${player[index].Points}</h2>
                    </a>
                    `
                }
            }

        }
    }
    formation({{$Team->Formation[0]}},{{$Team->Formation[2]}},{{$Team->Formation[4]}})
</script>

</html>