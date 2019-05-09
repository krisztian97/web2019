@extends('front')

@section('content')

    <div class="jumbotron mt-5">
        <h1 class="display-4">Fast Travel</h1>
        <hr class="my-4">
    </div>

    <div class="row">
        @foreach($Travels as $travel)
            <div class="col-lg-4 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $travel->title }}</h5>
                        <p class="card-text">{{ date('Y.m.d', $travel->start )}} {{ date('Y.m.d',$travel->end) }} </p>
                        <a href="/utazas/{{ $travel->id }}" class="btn btn-primary">Bővebben</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection