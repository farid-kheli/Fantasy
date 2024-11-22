@extends('Main.Main')
@section('Nav')
<a href="{{route('home')}}">
    <li  class="active"><img src="https://www.freeiconspng.com/thumbs/house-png/home-house-silhouette-icon-building--public-domain-pictures--20.png"
            alt=""></li>
</a>
<a href="{{route('League.Tabul')}}">
    <li><img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/league-table-4294018-3561200.png?f=webp" alt="">
    </li>
</a>
<a href="{{route('Match.Page')}}">
    <li><img src="https://cdn-icons-png.flaticon.com/512/53/53254.png" alt=""></li>
</a>
<a href="{{route('Fantasie.Club')}}"><li><img src="https://www.pngall.com/wp-content/uploads/5/Vector-Game-Controller.png" alt=""></li></a>

@endsection('Nav')
@section('Main')

@endsection('Main')