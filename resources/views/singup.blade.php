<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\style.css">
    <script defer src="\js\main.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container  @if (!session('wrong'))right-panel-active @endif ">

        <!-- Sign Up -->
        <div class="container__form container--signup">
            <form action="{{Route('new.user')}}" method="POST" class="form" id="form1">
                @csrf
                <h2 class="form__title">Sign Up</h2>
                
                <input name="UserName" type="text" placeholder="User Name" class="input" />
                <input name="email" type="email" placeholder="Email" class="input" />
                <input name="password" type="password" placeholder="Password" class="input" />
                <input name="password2" type="password" placeholder="Re entre Password" class="input" />
                <button type="submit" class="btn">Sign Up</button>

            </form>

        </div>

        <!-- Sign In -->
        <div class="container__form container--signin">
            <form action="{{route('login')}}" method="POST" class="form" id="form2">
                @csrf
                <h2 class="form__title">Sign In</h2>
                @if (session('wrong'))
                        <div class="alert">
                            {{ session('wrong') }}
                        </div>
                @endif
                <input type="email" name="email"  placeholder="Email" class="input" value="{{old('email')}}" />
                <input type="password" name="password"   placeholder="Password" class="input" value="{{old('password')}}" />
                <a href="#" class="link">Forgot your password?</a>
                <button type="submit" class="btn">Sign In</button>
            </form>
        </div>

        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="signIn">Sign In</button>
                    @if ($errors->any())
                        <div class="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="overlay__panel overlay--right">
                    <button class="btn" id="signUp">Sign Up</button>
                    @if ($errors->any())
                        <div class="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</body>

</html>