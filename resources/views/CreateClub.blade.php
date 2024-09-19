@extends('Admin.Admin')
@section('main')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <body style="background: #00152b; ">
        <form action="{{route('Create.club')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="d-flex justify-content-center">
                <div class="d-flex flex-column gap-4 bg-dark p-5 rounded text-white" style="width: 800px">
                    @if (session('succece'))
                        <div class="alert alert-success" role="alert">
                            {{ session('succece') }}
                        </div>
                    @endif
                    <h4>club Name</h4>
                    <div class="mb-3">
                        <input name="ClubName" type="text" class="form-control" id="formGroupExampleInput"
                            placeholder="Enter Club Name">
                    </div>
                    <h4>club pictur (png image)</h4>
                    <div class="mb-3">
                        <input name="file" class="form-control" type="file" id="formFile">
                    </div>
                    <button type="submit" class="btn btn-success">Success</button>
                </div>
            </div>
        </form>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@endsection('main')
