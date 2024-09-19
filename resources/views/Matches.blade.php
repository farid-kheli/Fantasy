@extends('Admin.Admin')
@section('main')
    <h1>{{$time}}</h1>
        <div class="Create">
            @if (session('succece'))
                <div class="alert alert-success" role="alert">
                    {{ session('succece') }}
                </div>
            @endif
            <form action="{{ route('Create.Match') }}" class="match" method="POST">
                @csrf
                <div class="match-header">
                    <div class="match-tournament"><img src="\4.webp" />English
                        Premier
                        League</div>
                </div>
                <div class="match-content">
                    <div class="column">
                        <div class="dropdown">
                            <input type="search" name="home" id="drop1" value="chose home teame" class="dropbtn">
                            <div class="dropdown-content">
                                @foreach ($clubs as $club)
                                    <option onclick="click1(this.id)" value="{{ $club->ClubName }}"
                                        id="{{ $club->ClubName }}">{{ $club->ClubName }}</option>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="match-details">
                            <div class="match-date">
                                <input name="time" type="datetime-local">
                            </div>
                            <div class="match-bet-options">
                                <button class="match-bet-option">-:-</button>
                                <button class="match-bet-option">-:-</button>
                                <button class="match-bet-option">-:-</button>
                            </div>
                            <button class="newmatch" type="submit">add</button>
                        </div>
                    </div>
                    <div class="column">
                        <div class="dropdown">
                            <input type="search" name="away" id="drop2" value="chose away teame" class="dropbtn">
                            <div class="dropdown-content">
                                @foreach ($clubs as $club)
                                    <option onclick="click2(this.id)" id="{{ $club->ClubName }}">{{ $club->ClubName }}
                                    </option>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="live">

            @foreach ($liveMatches as $liveMatche)
            
                <div class="match">
                    <div class="match-header">
                        <div class="match-status">Live</div>
                        <div class="match-tournament"><img src="\4.webp" />English Premier
                            League</div>
                    </div>
                    <div class="match-content">
                        <div class="column">
                            <div class="team team--home">
                                <div class="team-logo">
                                    <img src="{{ $liveMatche->getTeam($liveMatche->Home)->FilePathe }}" />
                                </div>
                                <h2 class="team-name">{{ $liveMatche->Home }}</h2>
                            </div>
                        </div>
                        <div class="column">
                        <form action="{{route('Update.Match',$liveMatche->id)}}" method="post">
                            @csrf
                            <div class="match-details">
                                
                                <div class="match-score">
                                    <span class="match-score-number match-score-number--leading">
                                        <input name="home" id="home" value="{{$liveMatche->firstHome}}" style="width: 50px" type="number">
                                        </span>
                                    <span class="match-score-divider">:</span>
                                    <span class="match-score-number">
                                        <input name="away" id="away" value="{{$liveMatche->firstAway}}" style="width: 50px" type="number">
                                    </span>
                                </div>
                                <button
                                    type="submit" style="padding-right: 10px;padding-left: 10px; padding: 5px; margin-top:10px;hight:50px;background:#cfcf00;border-radius: 20px;">Update</button>
                                    <a href="{{route('Game.Carde',$liveMatche->id)}}">add detail</a>
                               
                                <div class="match-bet-options">
                                    <a style="cursor:pointer" onclick="matche('first',{{$liveMatche->firstHome}},{{$liveMatche->firstAway}})" class="match-bet-option">{{$liveMatche->firstHome}}:{{$liveMatche->firstAway}}</a>
                                    <a style="cursor:pointer" onclick="matche('secend',{{$liveMatche->secendHome}},{{$liveMatche->secendAway}})" class="match-bet-option">{{$liveMatche->secendHome}}:{{$liveMatche->secendAway}}</a>
                                    <a style="cursor:pointer" onclick="matche('thirde',{{$liveMatche->thirdeHome}},{{$liveMatche->thirdeAway}})" class="match-bet-option" style="background: green;color:white;">{{$liveMatche->thirdeHome}}:{{$liveMatche->thirdeAway}}</a>
                                </div>
                                <input type="hidden" id="matchenumber" name="matchenumber" value="first">
                            </div>
                            </form>
                        </div>
                        <div class="column">
                            <div class="team team--away">
                                <div class="team-logo">
                                    <img src="{{ $liveMatche->getTeam($liveMatche->Away)->FilePathe }}" />
                                </div>
                                <h2 class="team-name">{{ $liveMatche->Away }}</h2>
                            </div>
                        </div>
                    </div>

                </div>
                
            @endforeach

        </div>
        <div class="Curent">
            @foreach ($Pasets as $Paset)
                <div class="match">
                    <div class="match-header">
                        <div class="match-tournament"><img src="\4.webp" />English Premier
                            League</div>
                    </div>
                    <div class="match-content">
                        <div class="column">
                            <div class="team team--home">
                                <div class="team-logo">
                                    <img src="{{ $Paset->getTeam($Paset->Home)->FilePathe }}" />
                                </div>
                                <h2 class="team-name">{{ $Paset->Home }}</h2>
                            </div>
                        </div>
                        <div class="column">
                            <div class="match-details">
                                <div class="match-date">
                                    <strong>{{$Paset->Time}} </strong>
                                </div>
                                <div class="match-score">
                                    <span class="match-score-number match-score-number--leading">2</span>
                                    <span class="match-score-divider">:</span>
                                    <span class="match-score-number">0</span>
                                </div>
                                <div class="match-bet-options">
                                    <button class="match-bet-option">{{$Paset->firstHome}}:{{$Paset->firstAway}}</button>
                                    <button class="match-bet-option">{{$Paset->secendHome}}:{{$Paset->secendAway}}</button>
                                    <button class="match-bet-option">{{$Paset->thirdeHome}}:{{$Paset->thirdeAway}}</button>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="team team--away">
                                <div class="team-logo">
                                    <img src="{{ $Paset->getTeam($Paset->Away)->FilePathe }}" />
                                </div>
                                <h2 class="team-name">{{ $Paset->Away }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($comings as $coming)
                <div class="match">
                    <div class="match-header">
                        <div class="match-tournament"><img src="\4.webp" />English Premier
                            League</div>
                    </div>
                    <div class="match-content">
                        <div class="column">
                            <div class="team team--home">
                                <div class="team-logo">
                                    <img src="{{ $coming->getTeam($coming->Home)->FilePathe }}" />
                                </div>
                                <h2 class="team-name">{{ $coming->Home }}</h2>
                            </div>
                        </div>
                        <div class="column">
                            <div class="match-details">
                                <div class="match-date">
                                    <strong>{{$coming->Time}} </strong>
                                </div>
                                <div class="match-score">
                                    <span class="match-score-number match-score-number--leading">-</span>
                                    <span class="match-score-divider">:</span>
                                    <span class="match-score-number">-</span>
                                </div>
                                <div class="match-bet-options">
                                    <button class="match-bet-option">-:-</button>
                                    <button class="match-bet-option">-:-</button>
                                    <button class="match-bet-option">-:-</button>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="team team--away">
                                <div class="team-logo">
                                    <img src="{{ $coming->getTeam($coming->Away)->FilePathe }}" />
                                </div>
                                <h2 class="team-name">{{ $coming->Away }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('js/Matches.js') }}"></script>
@endsection('main')
