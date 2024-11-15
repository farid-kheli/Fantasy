@extends('Admin.Admin')
@section('main')
<div class="gap">
    <form action="{{route('Save.Fixtur.Info')}}" method="post">
        @csrf
        <div class="Fixture">
            <div class="round">
                <div class="stage"></div>
                <div class="stage"></div>
                <div class="stage"></div>
                <div class="stage"></div>
                <div class="stage"></div>
                <div class="stage"></div>
                <div class="stage"></div>
                <div class="stage"></div>
            </div>
            <div class="round" style=" margin-top:60px;gap:70px">
                <div class="stage"></div>
                <div class="stage"></div>
                <div class="stage"></div>
                <div class="stage"></div>
            </div>
            <div class="round" style=" margin-top:120px;gap:180px">
                <div class="stage"></div>
                <div class="stage"></div>
            </div>
            <div class="round" style=" margin-top:230px;">
                <div class="stage"></div>
            </div>
        </div>
        <div class="Fixture-controler">
            <div class="controller">
                <div>
                    <a onclick="random()">random chose</a>
                    <button id="save">Save</button>
                    <input name="datetime" type="datetime-local">
                </div>
            </div>
            <div class="ClubsList">
                @foreach ($clubs as $club)
                    <div class="c" id="{{$club->id}}">
                        <img src="{{$club->FilePathe}}" alt="">
                        <div type="text" value="1"> {{$club->ClubName}} </div>
                    </div>
                @endforeach
            </div>
        </div>
    </form>

    @foreach ($Fixturs as $Fixtur)
        <div class="row">
            <div class="Fixture">
                <div class="round">
                    <div class="stage">
                        <img src="{{$Fixtur->club($Fixtur->team0)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team0, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team0)->ClubName}}</a>
                    </div>
                    <div class="stage">
                        <img src="{{$Fixtur->club($Fixtur->team1)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team1, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team1)->ClubName}}</a>
                    </div>
                    <div class="stage">
                        <img src="{{$Fixtur->club($Fixtur->team2)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team2, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team2)->ClubName}}</a>
                    </div>
                    <div class="stage">
                        <img src="{{$Fixtur->club($Fixtur->team3)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team3, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team3)->ClubName}}</a>
                    </div>
                    <div class="stage">
                        <img src="{{$Fixtur->club($Fixtur->team4)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team4, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team4)->ClubName}}</a>
                    </div>
                    <div class="stage">
                        <img src="{{$Fixtur->club($Fixtur->team5)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team5, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team5)->ClubName}}</a>
                    </div>
                    <div class="stage">
                        <img src="{{$Fixtur->club($Fixtur->team6)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team6, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team6)->ClubName}}</a>
                    </div>
                    <div class="stage">
                        <img src="{{$Fixtur->club($Fixtur->team7)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team7, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team7)->ClubName}}</a>
                    </div>
                </div>
                <div class="round" style=" margin-top:60px;gap:70px">
                    <div class="stage">
                        @if ($Fixtur->team8!=null)
                            <img src="{{$Fixtur->club($Fixtur->team8)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team8, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team8)->ClubName}}</a>
                        @endif
                        </div>
                    <div class="stage">
                        @if ($Fixtur->team9!=null)
                            <img src="{{$Fixtur->club($Fixtur->team9)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team9, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team9)->ClubName}}</a>
                        @endif
                        </div>
                    <div class="stage">
                        @if ($Fixtur->team10!=null)
                            <img src="{{$Fixtur->club($Fixtur->team10)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team10, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team10)->ClubName}}</a>
                        @endif
                        </div>
                    <div class="stage">
                        @if ($Fixtur->team11!=null)
                            <img src="{{$Fixtur->club($Fixtur->team11)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team11, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team11)->ClubName}}</a>
                        @endif
                        </div>
                </div>
                <div class="round" style=" margin-top:120px;gap:180px">
                    <div class="stage">
                        @if ($Fixtur->team12!=null)
                            <img src="{{$Fixtur->club($Fixtur->team12)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team12, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team12)->ClubName}}</a>
                        @endif
                        </div>
                    <div class="stage">
                        @if ($Fixtur->team13!=null)
                            <img src="{{$Fixtur->club($Fixtur->team13)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team13, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team13)->ClubName}}</a>
                        @endif
                        </div>
                </div>
                <div class="round" style=" margin-top:230px;">
                    <div class="stage">
                        @if ($Fixtur->team14!=null)
                            <img src="{{$Fixtur->club($Fixtur->team14)->FilePathe}}" alt="">
                        <a
                            href="{{route('Game.Carde', [$Fixtur->team14, $Fixtur->id])}}">{{$Fixtur->club($Fixtur->team14)->ClubName}}</a>
                        @endif
                        </div>
                </div>
            </div>
            <div class="panel">
                @foreach ($Matches as $Matche)
                    @if ($Fixtur->id == $Matche->FixturN)
                        <div class="game 
                                    @if ($Matche->Time == null)
                                           notlive

                                    @else
                                           live 

                                    @endif
                                    ">
                            <div class="one">
                                <div class="team">
                                    <img src="{{$Fixtur->club($Matche->Home)->FilePathe}}" alt="">
                                    <h4>{{$Fixtur->club($Matche->Home)->ClubName}}</h4>
                                    @if ($Matche->EndTime == null)
                                          <a
                                        @if ($Matche->Time != null)
                                            href ="{{route('Scoor.Game', ['Home',$Matche->id])}}"
                                        @endif
                                        id="scoor">scoor a goal</a>  
                                    @endif
                                    
                                </div>
                                <div class="scoor">
                                    <h1>{{$Matche->GoalHome}}</h1>
                                    <h1>:</h1>
                                    <h1>{{$Matche->GoalAway}}</h1>
                                </div>
                                <div class="team">
                                    <img src="{{$Fixtur->club($Matche->Away)->FilePathe}}" alt="">
                                    <h4>{{$Fixtur->club($Matche->Away)->ClubName}}</h4>
                                    @if ($Matche->EndTime == null)
                                    <a
                                    @if ($Matche->Time != null)
                                        href ="{{route('Scoor.Game', ['Away',$Matche->id])}}"
                                    @endif
                                     id="scoor2">scoor a goal</a>
                                     @endif
                                </div>
                            </div>
                            <div class="too">
                                @if ($Matche->EndTime == null)
                                   <a
                                @if ($Matche->Time != null)
                                        href ="{{route('End.Game', [$Matche->id])}}"
                                @endif
                                id="end" class="end">End Game</a> 
                                
                                
                                <a href="{{route('start.Game', $Matche->id)}}" class="strat">Start Game</a>
                                @endif
                            </div>
                        </div>

                    @endif
                @endforeach
                <a href="{{route('Start.Fixtur',$Fixtur->id)}}">start Fixtur</a>
            </div>
        </div>
    @endforeach
</div>

<script src="{{ asset('js/Fixtur.js') }}"></script>
@endsection('main')