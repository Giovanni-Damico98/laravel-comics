@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')

    <body>
        <div class="container d-flex justify-content-center align-content-center gap-5 flex-wrap">
            @foreach ($comics as $comicsItem)
                <div class="card">
                    <img src="{{ $comicsItem['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comicsItem['title'] }}</h5>
                        <p class="card-text text-truncate">{{ $comicsItem['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
@endsection
