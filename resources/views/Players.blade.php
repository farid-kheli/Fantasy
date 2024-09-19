@extends('Matches.Matches')
@section('cotaner')
<div class="players-table">
    <h2>Players Table</h2>
    <table>
        <thead>
            <tr>
                <th>Position</th>
                <th>Name</th>
                <th>Club</th>
                <th><a href="{{ route('Players.Page','Gols') }}">Gols</a></th>
                <th><a href="{{ route('Players.Page','assiste') }}">assiste</a></th>
                <th><a href="{{ route('Players.Page','Avrege') }}">Avrege Raiting</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>1</td>
                    <td>{{$player->Name}} {{$player->LastName}}</td>
                    <td>{{$player->Club}}</td>
                    <td>{{$player->Gols}}</td>
                    <td>{{$player->assiste}}</td>
                    <td>{{$player->Avrege}}</td>
                </tr>
            @endforeach
            <!-- Add more rows for other players -->
        </tbody>
    </table>
</div>
@endsection('cotaner')
