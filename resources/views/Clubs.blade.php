@extends('Admin.Admin')
@section('main')
    <div class="league-table">
        <h2>League Table</h2>
        <table>
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Team</th>
                    <th>Played</th>
                    <th>Won</th>
                    <th>Drawn</th>
                    <th>Lost</th>
                    <th>Points</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clubs as $club)
                  <tr>
                    <td>1</td>
                    <td><a href="{{route('Admin.Clubs.Manage',1)}}" style="text-decoration: none;color:white">{{$club->ClubName}}</a></td>
                    <td>10</td>
                    <td>8</td>
                    <td>1</td>
                    <td>1</td>
                    <td>25</td>
                </tr>  
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection('main')
