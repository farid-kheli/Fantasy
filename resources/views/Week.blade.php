@extends('Main.Main')
@section('Nav')
<a href="{{route('home')}}">
    <li><img src="https://www.freeiconspng.com/thumbs/house-png/home-house-silhouette-icon-building--public-domain-pictures--20.png"
            alt=""></li>
</a>
<a href="{{route('League.Tabul')}}">
    <li><img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/league-table-4294018-3561200.png?f=webp" alt="">
    </li>
</a>
<a href="{{route('Match.Page')}}">
    <li class="active"><img src="https://cdn-icons-png.flaticon.com/512/53/53254.png" alt=""></li>
</a>
<a href="{{route('Fantasie.Club',[1,1])}}"><li><img src="https://www.pngall.com/wp-content/uploads/5/Vector-Game-Controller.png" alt=""></li></a>
<li><img src="https://static.thenounproject.com/png/716657-200.png" alt=""></li>
@endsection('Nav')
@section('Main')
<div class="main">
    <div class="sn">
        <a href="{{route('Match.Page')}}">
            <div class="side ">Matches</div>
        </a>
        <a href="{{route('League.Plan', [1])}}">
            <div class="side sactive">Fixturs</div>
        </a>
        <a href="{{route('Players.Page', ['Gols'])}}">
            <div class="side">Players</div>
        </a>
    </div>
    <div class="Fixturs">
        <div class="Round">
            <div class="Stage">
                <img src="{{$Fixtur->club($Fixtur->team0)->FilePathe}}" alt="">
                <h3>{{$Fixtur->club($Fixtur->team0)->ClubName}}</h3>
            </div>
            <div class="Stage">
                <img src="{{$Fixtur->club($Fixtur->team1)->FilePathe}}" alt="">
                <h3>{{$Fixtur->club($Fixtur->team1)->ClubName}}</h3>
            </div>
            <div class="Stage">
                <img src="{{$Fixtur->club($Fixtur->team2)->FilePathe}}" alt="">
                <h3>{{$Fixtur->club($Fixtur->team2)->ClubName}}</h3>
            </div>
            <div class="Stage">
                <img src="{{$Fixtur->club($Fixtur->team3)->FilePathe}}" alt="">
                <h3>{{$Fixtur->club($Fixtur->team3)->ClubName}}</h3>
            </div>
            <div class="Stage">
                <img src="{{$Fixtur->club($Fixtur->team4)->FilePathe}}" alt="">
                <h3>{{$Fixtur->club($Fixtur->team4)->ClubName}}</h3>
            </div>
            <div class="Stage">
                <img src="{{$Fixtur->club($Fixtur->team5)->FilePathe}}" alt="">
                <h3>{{$Fixtur->club($Fixtur->team5)->ClubName}}</h3>
            </div>
            <div class="Stage">
                <img src="{{$Fixtur->club($Fixtur->team6)->FilePathe}}" alt="">
                <h3>{{$Fixtur->club($Fixtur->team6)->ClubName}}</h3>
            </div>
            <div class="Stage">
                <img src="{{$Fixtur->club($Fixtur->team7)->FilePathe}}" alt="">
                <h3>{{$Fixtur->club($Fixtur->team7)->ClubName}}</h3>
            </div>
        </div>
        <div class="sparator"></div>
        <div class="Round">
            <div class="Stage">
                @if ($Fixtur->team8 != null)
                    <img src="{{$Fixtur->club($Fixtur->team8)->FilePathe}}" alt="">
                    <h3>{{$Fixtur->club($Fixtur->team8)->ClubName}}</h3>
                @else
                    winner from Matche one
                @endif
            </div>
            <div class="Stage">
                @if ($Fixtur->team9 != null)
                    <img src="{{$Fixtur->club($Fixtur->team9)->FilePathe}}" alt="">
                    <h3>{{$Fixtur->club($Fixtur->team9)->ClubName}}</h3>
                @else
                    winner from Matche one
                @endif

            </div>
            <div class="Stage">
                @if ($Fixtur->team10 != null)
                    <img src="{{$Fixtur->club($Fixtur->team10)->FilePathe}}" alt="">
                    <h3>{{$Fixtur->club($Fixtur->team10)->ClubName}}</h3>
                @else
                    winner from Matche tow
                @endif

            </div>
            <div class="Stage">
                @if ($Fixtur->team11 != null)
                    <img src="{{$Fixtur->club($Fixtur->team11)->FilePathe}}" alt="">
                    <h3>{{$Fixtur->club($Fixtur->team11)->ClubName}}</h3>
                @else
                    winner from Matche tow
                @endif

            </div>
        </div>
        <div class="sparator"></div>
        <div class="Round">
            <div class="Stage">
                @if ($Fixtur->team12 != null)
                    <img src="{{$Fixtur->club($Fixtur->team12)->FilePathe}}" alt="">
                    <h3>{{$Fixtur->club($Fixtur->team12)->ClubName}}</h3>
                @else
                    winner from Matche tow
                @endif

            </div>

            <div class="Stage">
                @if ($Fixtur->team13 != null)
                    <img src="{{$Fixtur->club($Fixtur->team13)->FilePathe}}" alt="">
                    <h3>{{$Fixtur->club($Fixtur->team13)->ClubName}}</h3>
                @else
                    winner from Matche three
                @endif
            </div>
        </div>
        <div class="sparator"></div>
        <div class="Round">
            <div class="Stage">
                @if ($Fixtur->team14 != null)
                    <img src="{{$Fixtur->club($Fixtur->team14)->FilePathe}}" alt="">
                    <h3>{{$Fixtur->club($Fixtur->team14)->ClubName}}</h3>
                @else
                    winner from Matche this Fixtur
                @endif


            </div>
        </div>
    </div>
    <div class="fixtur-panel">
        @foreach ($AllFixtur as $oneFixtur)
        <a href="{{route('League.Plan',$oneFixtur->id)}}">
            <div  class="wf">
                @if ($oneFixtur->team14!=null)
                    <h3>Fixtur {{$oneFixtur->id}} : </h3>
                    <img src="{{$oneFixtur->club($oneFixtur->team14)->FilePathe}}" alt="">
                    <h3>{{$oneFixtur->club($oneFixtur->team14)->ClubName}}</h3>
                @else
                    @if ($oneFixtur->datendtime<$time)
                    <h3>Fixtur {{$oneFixtur->id}} : Live Now</h3>
                    @else
                    <h3>Fixtur {{$oneFixtur->id}} : Coming Fixtur in {{$oneFixtur->datendtime}}</h3>
                    @endif
                @endif
            </div>
        </a>
        @endforeach

    </div>
</div>
@endsection('Main')