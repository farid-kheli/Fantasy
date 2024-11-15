@extends('Main.Main')
@section('Nav')
<a href="{{route('home')}}"><li ><img
        src="https://www.freeiconspng.com/thumbs/house-png/home-house-silhouette-icon-building--public-domain-pictures--20.png"
        alt=""></li></a>
<a href="{{route('League.Tabul')}}">
    <li class="active"><img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/league-table-4294018-3561200.png?f=webp" alt="">
    </li>
</a>
<a href="{{route('Match.Page')}}"><li><img src="https://cdn-icons-png.flaticon.com/512/53/53254.png" alt=""></li></a>
<li><img src="https://www.pngall.com/wp-content/uploads/5/Vector-Game-Controller.png" alt=""></li>
<li><img src="https://static.thenounproject.com/png/716657-200.png" alt=""></li>
@endsection('Nav')
@section('Main')
<div class="MT">
<table>
    <thead>
        <tr>
        <th>#</th>
        <th>bage</th>
        <th>Name</th>
        <th>Win</th>
        <th>Draw</th>
        <th>Lost</th>
        <th>Points</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Clubs as $Club)
            <tr>
                <th>1</th>
                <th><img src="{{$Club->FilePathe}}" alt=""></th>
                <th>{{$Club->ClubName}}</th>
                <th>10</th>
                <th>5</th>
                <th>3</th>
                <th>50</th>
            </tr> 
        @endforeach
           
        
    </tbody>
</table>
</div>
@endsection('Main')