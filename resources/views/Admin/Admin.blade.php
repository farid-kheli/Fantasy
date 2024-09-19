<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Admin.css') }}">
    <title>Admin</title>
</head>
<body>
 
<div class="sidenav" id="sidenav">
    <div style="color: white; padding:20px;">
    <h2>Adminstration</h2></div>
    <a href="{{route('Admin.Matches')}}">Matches</a>
    <a href="{{route('Admin.Clubs')}}">Clubs</a>
    <a href="{{route('Admin.Create.Club')}}">Creat Club</a>
    <a href="{{route('Admin.Create.Player')}}">Creat Player</a>
  </div>
  
  <div class="main-content">
    <button class="openbtn" style="color: rgb(255, 255, 255);padding:10px;" onclick="toggleNav()">☰</button>
    @yield('main')
  </div>
</body>
<script src="{{ asset('js/Admin.js') }}"></script>
</html>