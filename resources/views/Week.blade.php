@extends('Matches.Matches')
@section('cotaner')
<h1>Welcome to My Website</h1>
<p>This is the main content of the page.</p>


<div class="bracket">
    <div class="round">
        <div class="match">
            <div class="team">Team A</div>
            <div class="team">Team H</div>
        </div>
        <div class="match">
            <div class="team">Team B</div>
            <div class="team">Team G</div>
        </div>
        <div class="match">
            <div class="team">Team C</div>
            <div class="team">Team F</div>
        </div>
        <div class="match">
            <div class="team">Team D</div>
            <div class="team">Team E</div>
        </div>
    </div>
    <div class="separator"></div>
    <div class="round">
        <div class="match">
            <div class="team">Winner 1</div>
            <div class="team">Winner 2</div>
        </div>
        <div class="match">
            <div class="team">Winner 3</div>
            <div class="team">Winner 4</div>
        </div>
    </div>
    <div class="separator"></div>
    <div class="round">
        <div class="match">
            <div class="team">Final Winner</div>
        </div>
    </div>
</div>
@endsection('cotaner')
