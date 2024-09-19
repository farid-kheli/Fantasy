@extends('Admin.Admin')
@section('main')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <body style="background: #00152b; ">
        @if (session('succece'))
                        <div class="alert alert-success" role="alert">
                            {{ session('succece') }}
                        </div>
                    @endif
        <div class="d-flex justify-content-center" >
            <form method="POST" action="{{route('Create.Player')}}" class="d-flex flex-column gap-4 bg-dark p-5 rounded text-white"  enctype="multipart/form-data">
                @csrf
                <h4>player Name</h4>
                <div class="row">
                    <div class="col">
                        <input name="Name" type="text" class="form-control" placeholder="name" aria-label="First name">
                    </div>
                </div>
                <h4>player Price £</h4>
                <div class="mb-3">
                    <input  name="price" type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter player price">
                </div>
                <h4>player Club</h4>
                <select  name="club" class="form-select form-select-lg mb-3" aria-label="Large select example">
                    <option selected>Open this select menu</option>
                    @foreach ($clubs as $club)
                    <option>{{$club->ClubName}}</option>
                    @endforeach
                </select>
                <h4>player Posision</h4>
                <select  name="position" class="form-select form-select-lg mb-3" aria-label="Large select example">
                    <option selected>Open this select menu</option>
                    <option>STR</option>
                    <option>MID</option>
                    <option>DEF</option>
                    <option>GOL</option>
                </select>
                <h4>player picter (png image)</h4>
                <div class="mb-3">
                    <input name="file" class="form-control" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-success">Success</button>
            </form>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@endsection('main')
