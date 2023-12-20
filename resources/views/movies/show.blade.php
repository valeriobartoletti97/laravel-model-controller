@extends('layouts.app')

@section('title', 'Movie')

@section('content')

    <main class="movie-wrapper vh-100">
            <h2 class="text-uppercase text-center pt-5">{{ $movie->title}}</h2>
            <div class="img-movie d-flex justify-content-center mt-3">
                <img src="{{ $movie->image }}" alt="{{ $movie->title}}">
            </div>
    </main>

@endsection
