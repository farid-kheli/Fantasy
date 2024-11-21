@extends('Main.Main')
@section('Nav')
<a href="{{route('home')}}">
    <li  ><img src="https://www.freeiconspng.com/thumbs/house-png/home-house-silhouette-icon-building--public-domain-pictures--20.png"
            alt=""></li>
</a>
<a href="{{route('League.Tabul')}}">
    <li ><img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/league-table-4294018-3561200.png?f=webp" alt="">
    </li>
</a>
<a href="{{route('Match.Page')}}">
    <li class="active"><img src="https://cdn-icons-png.flaticon.com/512/53/53254.png" alt=""></li>
</a>
<a href="{{route('Fantasie.Club',[1,1])}}"><li><img src="https://www.pngall.com/wp-content/uploads/5/Vector-Game-Controller.png" alt=""></li></a>

@endsection('Nav')
@section('Main')
<div class="main">
    <div class="sn">
        <a href="{{route('Match.Page')}}">
            <div class="side ">Matches</div>
        </a>
        <a href="{{route('League.Plan', [1])}}">
            <div class="side ">Fixturs</div>
        </a>
        <a href="{{route('Players.Page', ['Gols'])}}">
            <div class="side sactive">Players</div>
        </a>
    </div>
    <div class="players-table">
        <div class="MT">
            <table>
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Name</th>
                        <th>Club</th>
                        <th><a href="{{ route('Players.Page', 'Gols') }}">Gols</a></th>
                        <th><a href="{{ route('Players.Page', 'assiste') }}">assiste</a></th>
                        <th><a href="{{ route('Players.Page', 'Avrege') }}">Avrege Raiting</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <th>1</th>
                            <th>{{$player->Name}} {{$player->LastName}}</th>
                            <th>{{$player->Club}}</th>
                            <th>{{$player->Gols}}</th>
                            <th>{{$player->assiste}}</th>
                            <th>{{$player->Avrege}}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection('Main')