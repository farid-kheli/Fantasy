@extends('playerprofiel.PlayerProfiel')
@section('situation')
<div class="d-flex gap-4">
    <div class="form-check">
        <input value="1" class="form-check-input" type="radio" name="situation" id="flexRadioDefault1" 
        @if ($Player->situation_id==1)
            checked
        @endif 
        >
        <label class="form-check-label text-white" for="flexRadioDefault1">
            Avariabel
        </label>
    </div>
    <div class="form-check">
        <input value="2" class="form-check-input" type="radio" name="situation" id="flexRadioDefault2" 
        @if ($Player->situation_id==2)
        checked
        @endif  
         >
        <label class="form-check-label text-white" for="flexRadioDefault2">
        Injured
        </label>
    </div>
    <div class="form-check">
        <input value="3"  class="form-check-input" type="radio" name="situation" id="flexRadioDefault2"
        @if ($Player->situation_id==3)
        checked
        @endif 
         >
        <label class="form-check-label text-white" for="flexRadioDefault2">
            Questionable
        </label>
    </div>
</div>
@endsection('situation')
@section('Action')
<button type="button" class="btn btn-outline-warning">Update</button>
<button type="submit" class="btn btn-outline-success">Submit</button>
@endsection('Action')
@section('Tabel')
<tbody>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input name="MinutePlayed" id="MinutePlayed1" value="{{$FixturPoints->MatchePlayed}}"
                onchange="calculate(this,'MinutePlayed')" type="number" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Matche Played</h2>
        </td>
        <td>
            <h1 id="MinutePlayed" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->Goals}}" name="Goals" id="Goals1"
                onchange="calculate(this,'Goals')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Goals</h2>
        </td>
        <td>
            <h1 id="Goals" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->GoalAssists}}" name="GoalAssists" id="GoalAssists1"
                onchange="calculate(this,'GoalAssists')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Goal Assists</h2>
        </td>
        <td>
            <h1 id="GoalAssists" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->BigChanceCreated}}" name="BigChanceCreated"
                id="BigChanceCreated1" onchange="calculate(this,'BigChanceCreated')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Big Chance Created</h2>
        </td>
        <td>
            <h1 id="BigChanceCreated" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->BallsIntoTheBox}}" name="BallsIntoTheBox" id="BallsIntoTheBox1"
                onchange="calculate(this,'BallsIntoTheBox')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Balls Into The Box</h2>
        </td>
        <td>
            <h1 id="BallsIntoTheBox" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->PinaltiesSaved}}" name="PinaltiesSaved" id="PinaltiesSaved1"
                onchange="calculate(this,'PinaltiesSaved')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Pinalties Saved</h2>
        </td>
        <td>
            <h1 id="PinaltiesSaved" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->Saves}}" name="Saves" id="Saves1"
                onchange="calculate(this,'Saves')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Saves</h2>
        </td>
        <td>
            <h1 id="Saves" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->EffectiveClearances}}" name="EffectiveClearances"
                id="EffectiveClearances1" onchange="calculate(this,'EffectiveClearances')"
                style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Effective Clearances</h2>
        </td>
        <td>
            <h1 id="EffectiveClearances" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->PenaltiesMissed}}" name="PenaltiesMissed" id="PenaltiesMissed1"
                onchange="calculate(this,'PenaltiesMissed')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Penalties Missed</h2>
        </td>
        <td>
            <h1 id="PenaltiesMissed" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->OwnGoals}}" name="OwnGoals" id="OwnGoals1"
                onchange="calculate(this,'OwnGoals')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Own Goals</h2>
        </td>
        <td>
            <h1 id="OwnGoals" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->YellowCard}}" name="YellowCard" id="YellowCard1"
                onchange="calculate(this,'YellowCard')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Yellow Card</h2>
        </td>
        <td>
            <h1 id="YellowCard" name="MinutePlayed" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->RedCard}}" name="RedCard" id="RedCard1"
                onchange="calculate(this,'RedCard')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Red Card</h2>
        </td>
        <td>
            <h1 id="RedCard" name="MinutePlayed" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->EffectiveDribbles}}" name="EffectiveDribbles"
                id="EffectiveDribbles1" onchange="calculate(this,'EffectiveDribbles')"
                style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Effective Dribbles</h2>
        </td>
        <td>
            <h1 id="EffectiveDribbles" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->Recoveries}}" name="Recoveries" id="Recoveries1"
                onchange="calculate(this,'Recoveries')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Recoveries</h2>
        </td>
        <td>
            <h1 id="Recoveries" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input type="number" value="{{$FixturPoints->LostBalls}}" name="LostBalls" id="LostBalls1"
                onchange="calculate(this,'LostBalls')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Lost Balls</h2>
        </td>
        <td>
            <h1 id="LostBalls" class="text-warning">0</h1>
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
            <input type="number" value="{{$FixturPoints->AddisionallPoints}}" name="AddisionallPoints"
                id="AddisionallPoints" onchange="calculate(this,'AddisionallPoints')" style=" width:70px; height:50px;">
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
            <input type="hidden" id="TOTALPOINTS" name="TOTALPOINTS" value="0">
        </td>
        <td>
            <h1 id="TOTAL" class="text-danger">0</h1>
        </td>

    </tr>
</tbody>
@endsection('Tabel')