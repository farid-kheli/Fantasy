<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/homme.css') }}">
    <title>Document</title>
</head>

<body>

    <div class="new">
        
        <nav>
            <div class="MainNav">
                
                <title>TITLE</title>
                <ul>
                    <a href="#">abou us</a>
                    <a href="#">singup</a>
                    <a href="{{route('Singup')}}">login</a>
                </ul>
            </div>
        </nav>

        <ul class="ul">
            
            @yield('Nav')
        </ul>
        
    </div>
    @yield('Main')
</body>

</html>