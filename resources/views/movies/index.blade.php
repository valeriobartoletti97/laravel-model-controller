@extends('layouts.app')

@section('title', 'Films')

@section('content')

    <main class="movie-wrapper">
        <div class="container">
            <div class="row flex-wrap justify-content-start py-5 gx-5">
                @foreach ($movies as $movie)
                    <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center flex-wrap px-2 mt-5">
                        <div class="my-card">
                            <a href="{{route('movies.show', $movie['id'])}}">
                                <div class="img-box">
                                    <img src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}">
                                </div>
                                <h5 class="text-uppercase pt-4">
                                    {{ $movie['title'] }}
                                </h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

@endsection
