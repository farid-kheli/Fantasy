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
                <tr>
                    <td>1</td>
                    <td><a href="{{route('Admin.Clubs.Manage',1)}}" style="text-decoration: none;color:white">Team A</a></td>
                    <td>10</td>
                    <td>8</td>
                    <td>1</td>
                    <td>1</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Team B</td>
                    <td>10</td>
                    <td>6</td>
                    <td>2</td>
                    <td>2</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Team B</td>
                    <td>10</td>
                    <td>6</td>
                    <td>2</td>
                    <td>2</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Team B</td>
                    <td>10</td>
                    <td>6</td>
                    <td>2</td>
                    <td>2</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Team B</td>
                    <td>10</td>
                    <td>6</td>
                    <td>2</td>
                    <td>2</td>
                    <td>20</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
@endsection('main')
