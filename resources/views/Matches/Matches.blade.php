<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Navigation Panel</title>
    <link rel="stylesheet" href="{{ asset('css/Matches.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="side-nav">
        <div class="nav-header">
            <h2>Navigation</h2>
        </div>
        <nav class="nav2">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a  href="{{route('Match.Page')}}">Matches</a></li>
                <li>
                    <div class="w-100 btn-group dropend">
                    <a type="button"  style="background: #333;    border-radius: 20px;" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropend
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('League.Plan',1)}}">Action</a></li>
                        <li><a class="dropdown-item" href="{{route('League.Plan',1)}}">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </li>
                
                  
                <li><a href="{{ route('Players.Page','Gols') }}">Playes</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        @yield('cotaner')
    </div>
    </a>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
