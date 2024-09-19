@extends('Matches.Matches')
@section('cotaner')
<h1>Welcome to My Website</h1>
<p>This is the main content of the page.</p>

<!-- Match Card -->
<a href="#" style="text-decoration: none; color:rgb(0, 0, 0);">
    <div class="match-card">
        <div class="team">
            <h3>Team A</h3>
            <h5>5</h5>
            <h5>6</h5>
            <h5 class="live">Live</h5>
            <img src="team-a-logo.png" alt="Team A Logo">
        </div>
        <div class="versus">VS</div>
        <div class="team">
            <h3>Team B</h3>
            <h5>5</h5>
            <h5>6</h5>
            <h5 class="live">Live</h5>
            <img src="team-b-logo.png" alt="Team B Logo">
        </div>
        <div class="date-time">
            <p>Date: June 10, 2024</p>
            <p>Time: 8:00 PM</p>
        </div>
        <div class="venue">
            <p>Venue: Stadium Name</p>
            <p>Location: City, Country</p>
        </div>
    </div>
    </div>
</a>
@endsection('cotaner')
