



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
        <a href=""><div class="side sactive">Matches</div></a>
        <a href="{{route('League.Plan',[1])}}"><div class="side">Fixturs</div></a>
        <a href=""><div class="side">Players</div></a>
    </div>
    <div class="Matches">
        <div class="live-Matches">
            <div class="Matche">
                <div class="match-heade">
                    <div class="live">
                        <div class="P"></div>Live
                    </div>
                    <div class="chmpionsoftheturthe">
                        <img src="\files\3bEpSMBFSGM8XzvgzH6M.webp" alt="">
                        <h3>chmpions of the turfe</h3>
                    </div>
                    <div class="Fixtur">
                        <h3>Fistur 1</h3>
                    </div>
                </div>
                <div class="match-body">
                    <div class="Home-team">
                        <img src="\files\UEbU52pBdmvyb1DOdRsZ.webp" alt="">
                        <h2>Guthe N turfe</h2>
                    </div>
                    <div class="scoor">
                        <h2>2</h2>
                        <h2>:</h2>
                        <h2>2</h2>
                    </div>
                    <div class="Away-team">
                        <img src="\files\IVeUR30T6UFzAQ7egBYe.webp" alt="">
                        <h2>New Yup City</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('Main')