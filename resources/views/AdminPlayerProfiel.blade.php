@extends('playerprofiel.PlayerProfiel')
@section('Action')
<button type="button" class="btn btn-outline-warning">Update</button>
<button type="button" class="btn btn-outline-success">Submit</button>
@endsection('Action')
@section('Tabel')
<tbody>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
            <input name="MinutePlayed"  onchange="calculate(this,'MinutePlayed')" type="number"  style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Minute Played</h2>
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
        <input type="number" name="Goals" onchange="calculate(this,'Goals')" style=" width:70px; height:50px;">
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
        <input type="number" name="GoalAssists" onchange="calculate(this,'GoalAssists')" style=" width:70px; height:50px;">
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
        <input type="number" name="BigChanceCreated" onchange="calculate(this,'BigChanceCreated')" style=" width:70px; height:50px;">
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
        <input type="number" name="BallsIntoTheBox" onchange="calculate(this,'BallsIntoTheBox')" style=" width:70px; height:50px;">
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
        <input type="number" name="PinaltiesSaved" onchange="calculate(this,'PinaltiesSaved')" style=" width:70px; height:50px;">
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
        <input type="number" name="Saves" onchange="calculate(this,'Saves')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Saves</h2>
        </td>
        <td>
            <h1  id="Saves" class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
        <input type="number" name="EffectiveClearances" onchange="calculate(this,'EffectiveClearances')" style=" width:70px; height:50px;">
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
        <input type="number" name="PenaltiesMissed" onchange="calculate(this,'PenaltiesMissed')" style=" width:70px; height:50px;">
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
        <input type="number" name="OwnGoals" onchange="calculate(this,'OwnGoals')" style=" width:70px; height:50px;">
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
        <input type="number" name="YellowCard" onchange="calculate(this,'YellowCard')" style=" width:70px; height:50px;">
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
        <input type="number" name="RedCard" onchange="calculate(this,'RedCard')" style=" width:70px; height:50px;">
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
        <input type="number" name="EffectiveDribbles" onchange="calculate(this,'EffectiveDribbles')" style=" width:70px; height:50px;">
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
        <input type="number" name="Recoveries" onchange="calculate(this,'Recoveries')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Recoveries</h2>
        </td>
        <td>
            <h1 id="Recoveries"  class="text-warning">0</h1>
        </td>
    </tr>
    <tr>
        <th scope="col">
            <p style=" opacity:0;">###</p>
        </th>
        <th scope="row">
        <input type="number" name="LostBalls" onchange="calculate(this,'LostBalls')" style=" width:70px; height:50px;">
        </th>
        <td>
            <h2>Lost Balls</h2>
        </td>
        <td>
            <h1 id="LostBalls"  class="text-warning">0</h1>
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
        <input type="number" name="AddisionallPoints" id="AddisionallPoints" onchange="calculate(this,'AddisionallPoints')" style=" width:70px; height:50px;">
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
            <h1 id="TOTAL" class="text-danger">0</h1>
        </td>

    </tr>
</tbody>
@endsection('Tabel')