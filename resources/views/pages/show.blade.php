@extends('layouts.app')
@section('main-content')

    <body>
        <div class="container d-flex justify-content-center align-content-center gap-5 flex-wrap">
            <div class="card w-50">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                    <p class="card-text ">{{ $comic['description'] }}</p>
                </div>
            </div>
        </div>
    </body>
@endsection
