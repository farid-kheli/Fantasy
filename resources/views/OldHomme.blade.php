<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <title>home</title>
</head>

<body>
    <header>
        <div class="header-container">
            <h1>My Beautiful Website</h1>
            <nav>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="{{route('Singup')}}" class="singin">Sing up</a></li>
                    <li><a href="{{route('Singup')}}" class="login">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="container">
        <a style="text-decoration: none" href="{{route('League.Tabul')}}" >
            <div class='block'>
                <h3>league Info</h3>
                <div style="display: flex; gap:300px;">
                    <p>see league tabul and more deatals about the league </p>
                    <img style="height: 200px"
                        src="https://cdn.iconscout.com/icon/premium/png-256-thumb/league-table-4294018-3561200.png?f=webp"
                        alt="Setting">
                </div>
            </div>
        </a>
        <a style="text-decoration: none" href="{{route('Match.Page')}}">
            <div class='block'>
                <h3>Matches / Players</h3>
                <div style="display: flex; gap:300px;">
                    <p>see all matches and player information and more</p>
                    <img style="height: 200px" style="height: 300px"
                        src="https://cdn-icons-png.flaticon.com/512/53/53254.png" alt="Setting">
                </div>
            </div>
        </a>
        <a style="text-decoration: none"  href="{{route('Fantasie.Club',[1,1])}}">
            <div class='block'>
                <h3>Fantasie</h3>
                <div style="display: flex; gap:200px;">
                    <p>Play a compattive game in leagues withe your friends</p>
                    <img style="height: 200px"
                        src="https://www.pngall.com/wp-content/uploads/5/Vector-Game-Controller.png" alt="Setting">
                </div>
            </div>
        </a>
        <a style="text-decoration: none" href="">
            <div class='block'>
                <h3>Setting</h3>
                <div style="display: flex; gap:300px;">
                    <p>chang your information on the web site</p>
                    <img style="height: 200px" src="https://static.thenounproject.com/png/716657-200.png"
                        alt="Setting">
                </div>
            </div>
        </a>
    </div>
</body>

</html>
