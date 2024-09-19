<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class=" bg-dark">
    <form action="">
        <div class=" d-flex justify-content-center p-5">
            <div class=" d-flex flex-column gap-3" style="height: 900px; width: 2500px;">
                <div class=" d-flex h-25 w-100" style=" background:#111017;">
                    <div class="position-relative bg-black  d-flex justify-content-center h-100" style=" width: 15%">
                        <img style=" width:70px;" class="position-absolute top-0 start-0 translate-middle"
                            src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                        <img class=" h-100"
                            src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                            alt="">
                    </div>
                    <div class="p-3 d-flex flex-column " style="width: 90%">
                        <div class="d-flex gap-3  text-white">
                            @if ($Player->Position == 'GOL')
                                <h6 class="p-2" style="background: #b32d04;">
                                    GOL
                                </h6>
                            @endif
                            @if ($Player->Position == 'DEF')
                                <h6 class="p-2" style="background: #7e0073">
                                    DEF
                                </h6>
                            @endif
                            @if ($Player->Position == 'MID')
                                <h6 class="p-2" style="background: #00a000">
                                    MID
                                </h6>
                            @endif
                            @if ($Player->Position == 'STR')
                                <h6 class="p-2" style="background: rgb(0, 135, 139);">
                                    STR
                                </h6>
                            @endif
                            <h4>{{$Player->FirstName}} {{$Player->LastName}}</h4>
                            <div class="ms-auto d-flex gap-3">
                                <h4 class="mt-1 text-secondary">FSYP:</h4>
                                <h2>156</h2>
                            </div>
                        </div>
                        <div class="d-flex gap-3 mt-3 text-white">
                            <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                                style="height: 30px;  width: 30px;">
                            <h6 class="mt-1">Avalibule</h6>
                            <div class="ms-auto d-flex gap-3">
                                <h4 class="text-secondary mt-1">Average: </h4>
                                <h2>2.5</h2>
                            </div>
                        </div>
                        <div class="d-flex gap-3 mt-4 text-white">
                            <h2>{{$Player->Price}} £</h2>
                            <div class="ms-auto d-flex gap-3">
                                @yield('Action')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex w-100 gap-3 h-75">
                    <div class="w-25 p-3 gap-3 d-flex flex-column  h-100 " style=" background:#111017;">
                        <div class=" justify-content-center gap-4 d-flex p-4 h-25 rounded w-100 bg-white">
                            <img class="h-100" src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                            <h3 class="d-flex justify-content-center align-items-center">2 : 2</h3>
                            <img class="h-100" src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                        </div>
                        <div class=" justify-content-center gap-4 d-flex p-4 h-25 rounded w-100 bg-white">
                            <img class="h-100" src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                            <h3 class="d-flex justify-content-center align-items-center">2 : 2</h3>
                            <img class="h-100" src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                        </div>
                        <div class=" justify-content-center gap-4 d-flex p-4 h-25 rounded w-100 bg-white">
                            <img class="h-100" src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                            <h3 class="d-flex justify-content-center align-items-center">2 : 2</h3>
                            <img class="h-100" src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                        </div>
                    </div>
                    <div class="w-75 h-100 d-flex flex-column gap-3">
                        <div class="w-100  d-flex gap-3 p-2" style=" background:#111017; height: 20%">
                            <div class="h-100 position-relative d-flex flex-column justify-content-end"
                                style="background:#303030; width: 90px">
                                <div class="w-100 h-25  bg-success bg-gradient"></div>
                                <h2 class="position-absolute top-50 start-50 translate-middle text-white">3</h2>
                            </div>
                            <div class="h-100 position-relative d-flex flex-column justify-content-end"
                                style="background:#303030; width: 90px">
                                <div class="w-100 h-75 bg-success bg-gradient">
                                </div>
                                <h2 class="position-absolute top-50 start-50 translate-middle text-white">9</h2>
                            </div>
                            <div class="h-100  position-relative d-flex flex-column  justify-content-end"
                                style="background:#303030; width: 90px">
                                <div class="w-100 h-50  bg-success bg-gradient"></div>
                                <h2 class="position-absolute top-50 start-50 translate-middle text-white">15</h2>
                            </div>
                        </div>
                        <div class="w-100 p-3 overflow-auto" style=" background:#111017;height: 85%">
                            <h1 class=" text-white d-flex justify-content-center">Fixture 5</h1>
                            <table class="table table-dark table-striped w-100 ">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p style=" opacity:0;">###</p>
                                            </1th>
                                        <th scope="col">
                                            <h2 class="text-secondary">Amount</h2>
                                        </th>
                                        <th scope="col">
                                            <h2 class="text-secondary">Start</h2>
                                        </th>
                                        <th scope="col">
                                            <h2 class="text-secondary">Points</h2>
                                        </th>
                                    </tr>
                                </thead>
                                @yield('Tabel')
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/PlayerProfiel.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
    </form>
</body>

</html>