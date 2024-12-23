@extends('playerprofiel.PlayerProfiel')
@section('situation')
<img src='{{$Player->getsetuation($Player->situation_id)->ImgPathe}}'
    style="height: 30px;  width: 30px;">
@if ($Player->situation_id==1)
   
<h6 class="mt-1">Avalibule</h6> 
@elseif ($Player->situation_id==2)
<h6 class="mt-1">Injured</h6>
@elseif ($Player->situation_id==3)
<h6 class="mt-1">Qhuestnable</h6>
@endif
@endsection('situation')
@section('Action')
<a href="{{route('User.sele', [$User, $Player->id, 1])}}" type="button" class="btn btn-outline-danger">Sele Player</a>
@endsection('Action')
@section('Tabel')
<tbody>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>90</h1>
        </th>
        <td>
            <h2>Minute Played</h2>
        </td>
        <td>
            <h1 class="text-warning">2</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>1</h1>
        </th>
        <td>
            <h2>Goals</h2>
        </td>
        <td>
            <h1 class="text-warning">5</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>0</h1>
        </th>
        <td>
            <h2>Goal Assists</h2>
        </td>
        <td>
            <h1 class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>0</h1>
        </th>
        <td>
            <h2>Big Chance Created</h2>
        </td>
        <td>
            <h1 class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>0</h1>
        </th>
        <td>
            <h2>Balls Into The Box</h2>
        </td>
        <td>
            <h1 class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>0</h1>
        </th>
        <td>
            <h2>Pinalties Saved</h2>
        </td>
        <td>
            <h1 class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>2</h1>
        </th>
        <td>
            <h2>Saves</h2>
        </td>
        <td>
            <h1 class="text-warning">5</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>0</h1>
        </th>
        <td>
            <h2>Effective Clearances</h2>
        </td>
        <td>
            <h1 class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>0</h1>
        </th>
        <td>
            <h2>Penalties Missed</h2>
        </td>
        <td>
            <h1 class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>0</h1>
        </th>
        <td>
            <h2>Own Goals</h2>
        </td>
        <td>
            <h1 class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>0</h1>
        </th>
        <td>
            <h2>Yellow Card</h2>
        </td>
        <td>
            <h1 class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>0</h1>
        </th>
        <td>
            <h2>Red Card</h2>
        </td>
        <td>
            <h1 class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>1</h1>
        </th>
        <td>
            <h2>Effective Dribbles</h2>
        </td>
        <td>
            <h1 class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>5</h1>
        </th>
        <td>
            <h2>Recoveries</h2>
        </td>
        <td>
            <h1 class="text-warning">1</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>10</h1>
        </th>
        <td>
            <h2>Lost Balls</h2>
        </td>
        <td>
            <h1 class="text-warning">-1</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>##</h1>
        </th>
        <td>
            <h2>Addisionall Points</h2>
        </td>
        <td>
            <h1 class="text-warning">3</h1>
        </td>
    </tr>
    <tr>

        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <h1>##</h1>
        </th>
        <td>
            <h2 class="text-danger">TOTAL POINTS</h2>
        </td>
        <td>
            <h1 class="text-danger">12</h1>
        </td>

    </tr>
</tbody>
@endsection('Tabel')