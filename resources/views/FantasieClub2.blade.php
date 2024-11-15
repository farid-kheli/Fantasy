@extends('Main.MainFantasie')
@section('Main')
<form action="{{route('Fantasie.XI', [$User, $Fixur])}}" class="team-list" method="POST">
    @csrf
    <div class="butns">
        <a>Line-Up</a>
        <a class="bactiv" href="{{route('Fantasie.Club.Points', [1, 1])}}">Points</a>
    </div>
    <nav class="team-nave">

        <ul>
            @foreach ($Global as $Globals)
                <li><a href="{{route('Fantasie.Club', [$User, $Globals->FixturN])}}">W-{{$Globals->FixturN}}</a>
                </li>
            @endforeach
        </ul>

        <div class="dedline">
            <h3>Deadline - {{ \Carbon\Carbon::parse($Fixur->datendtime)->format('d M H:i') }}
            </h3>

            
        </div>


        <input type="hidden" id="vf" name="Formation" value="4-3-3">
        @if ($serverTime <= $Fixur->datendtime)
            <button type="submit">save</button>
        @endif

    </nav>

    <div class="team">
        <div class="player">
            <div class="Gole">
                @if ($Team->Player1 == null)
                    <div id="Player1" class="card2">
                        <div class="empty">
                            <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png" alt="">
                        </div>
                    </div>
                @else
                    <div id="Player1" class="card">
                        <div class="try">
                            <div class="points">
                                <h1>5</h1>
                            </div>
                        </div>
                        <div class="imag">
                            <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                alt="">
                        </div>
                        <div class="name"></div>
                    </div>
                @endif
            </div>
            <div id="defance" class="defance">
                @for ($i = 1; $i <= intval($Team->Formation[0]); $i++)
                                @php
                                    $property = $Team->{"Player$i"};
                                    //dd(intval($Team->Formation[0]))
                                @endphp
                                @if ($property == null)
                                    <div class="card2">
                                        <div class="empty">
                                            <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png" alt="">
                                        </div>
                                    </div>
                                @else
                                    <div class="card">
                                        <div class="try">
                                            <div class="points">
                                                <h1>5</h1>
                                            </div>
                                        </div>
                                        <div class="imag">
                                            <img src="{{$Team->getPlayer($property)->Pictur}}" alt="">
                                        </div>
                                        <div class="name"></div>
                                    </div>
                                @endif
                @endfor
            </div>
            <div id="midfield" class="midfield">
                @for ($i = intval($Team->Formation[0]) + 2; $i <= intval($Team->Formation[0]) + intval($Team->Formation[2]) + 1; $i++)
                                @php
                                    $property = $Team->{"Player$i"};
                                    //dd(intval($Team->Formation[0]))
                                @endphp
                                @if ($property == null)
                                    <div class="card2">
                                        <div class="empty">
                                            <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png" alt="">
                                        </div>
                                    </div>
                                @else
                                    <div class="card">
                                        <div class="try">
                                            <div class="points">
                                                <h1>5</h1>
                                            </div>
                                        </div>
                                        <div class="imag">
                                            <img src="{{$Team->getPlayer($property)->Pictur}}" alt="">
                                        </div>
                                        <div class="name"></div>
                                    </div>
                                @endif
                @endfor
            </div>
            <div id="attaque" class="attaque">
                @for ($i = intval($Team->Formation[0]) + intval($Team->Formation[2]) + 2; $i <= intval($Team->Formation[0]) + intval($Team->Formation[2])+ intval($Team->Formation[4]) + 1; $i++)
                                @php
                                    $property = $Team->{"Player$i"};
                                    //dd(intval($Team->Formation[0]))
                                @endphp
                                @if ($property == null)
                                    <div class="card2">
                                        <div class="empty">
                                            <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png" alt="">
                                        </div>
                                    </div>
                                @else
                                    <div class="card">
                                        <div class="try">
                                            <div class="points">
                                                <h1>5</h1>
                                            </div>
                                        </div>
                                        <div class="imag">
                                            <img src="{{$Team->getPlayer($property)->Pictur}}" alt="">
                                        </div>
                                        <div class="name"></div>
                                    </div>
                                @endif
                @endfor
            </div>
        </div>
    </div>
</form>
@endsection('Main')